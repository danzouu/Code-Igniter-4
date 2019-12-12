<?php namespace App\Controllers;

use App\Models\DjentPlaylistModel;

class DjentPlaylist extends BaseController
{
	public function index()
	{		
		$request = \Config\Services::request();
		$model = new DjentPlaylistModel();

		$query = $request->getGET('query');
		$field = $request->getGET('field');

		$builder = $model->builder();
		
		if(!empty($query) && !empty($field))
        {      	
        	$result = $model->search($builder,$query,$field);      	

        	$data = [
				'title' => 'Ultimate Djent Playlist',
				'playlist' => $result, 
                'query' => $query,
                'field' => $field,				
                'ip' => $_SERVER['HTTP_HOST'],
        	];
        }
        else
        { 	
			$result = $model->getAllTitles($builder);		
			$data = [
				'title' => 'Ultimate Djent Playlist Search Result',
				'playlist' => $result,				
                'query' => $query,
                'field' => $field,				
                'ip' => $_SERVER['HTTP_HOST'],				
			];

        }

		echo view('templates/header',$data);
		echo view('playlist/content', $data);
		echo view('templates/footer');
	}

	public function delete($id=null)
	{
		$dbConnect = new DjentPlaylistModel();

		if($id==null || empty($id))
			return redirect() ->to(site_url());
		$dbConnect->delete($id);
			return redirect() ->to(site_url());
	}

	public function info($id=null)
	{

		$dbConnect = new DjentPlaylistModel();

		$data = [
			'title' => 'Track Information',
			'playlist' => $dbConnect->getName($id), 
		];

		echo view('templates/header',$data);
		echo view('playlist/info',$data);
		echo view('templates/footer');
	}

	public function add()
	{
		$validation = \Config\Services::validation();
		$request = \Config\Services::request();

		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			if($this->validate([
				'track_title' => 'required|min_length[1]max_length[50]',
				'artist' => 'required|min_length[1]|max_length[50]',
				'album' => 'required|min_length[1]max_length[50]',
				'year' => 'required|min_length[4]max_length[4]',
			]))
		
			{
				$newTitle = [
					'track_title' => $request ->getPost('track_title'),
					'artist' => $request ->getPost('artist'),
					'album' => $request ->getPost('album'),
					'year' => $request ->getPost('year'),
				];

				$dbConnect = new DjentPlaylistModel();

				try {
					$result = $dbConnect->insert($newTitle);
				} catch (\Exception $e) {
					die($e->getMessage());	
				}

				return redirect()->to(site_url());
			}
		}

		$data = [
			'title'=> 'Add Track',
			'errors' => $validation->getErrors(),
		];

		echo view('templates/header',$data);
		echo view('playlist/add',$data);
		echo view('templates/footer');
	}

	public function edit($id=null)
	{
		$dbConnect = new DjentPlaylistModel();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();

		$id = $id==null ? $_REQUEST['id'] : $id;	

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			if($this->validate([
				'id'=> 'required',
				'track_title' => 'required|min_length[1]max_length[50]',
				'artist' => 'required|min_length[1]|max_length[50]',
				'album' => 'required|min_length[1]max_length[50]',
				'year' => 'required|min_length[4]max_length[4]',
			]))
			{
				$newTitle = [

					'track_title' => $request ->getPost('track_title'),
					'artist' => $request ->getPost('artist'),
					'album' => $request ->getPost('album'),
					'year' => $request ->getPost('year'),
				];

				try {
					$result = $dbConnect->update($request->getPost('id'),$newTitle);
				} catch (\Exception $e) {
					die($e->getMessage());	
				}

			 	return redirect()->to(site_url());
			}
		}

		$data = [
			'id' => $id,
			'title' => 'Edit Track',
			'playlist' => $dbConnect->getName($id),
			'errors' => $validation->getErrors(),
		];

		echo view('templates/header',$data);
		echo view('playlist/edit',$data);
		echo view('templates/footer');
	}	
}
