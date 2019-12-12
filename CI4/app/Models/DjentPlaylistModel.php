<?php namespace App\Models;

	use CodeIgniter\Model;

	class DjentPlaylistModel extends Model
	{
		protected $table = 'djent';
		protected $primaryKey = 'id';
		protected $allowedFields = ['track_title', 'artist', 'album', 'year'];

		public function search($builder,$query, $field)
		{			
			try{               

			$builder->like($field, $query);
			$builder->orderBy("year","asc");

            $result = $builder->paginate(50);


		}catch(\Exception $e){
			die($e->getMessage());
		}

		return $result;

	}
		
		public function getAllTitles($builder)
		{
			try {
				$builder->orderBy("year", "desc");
			    $result = $builder->paginate(30);
			} catch (\Exception $e) 
			{
				die($e->getMessage());	 
			}

			return $result;
		}
		public function getName($id=null)
		{
			$db = \Config\Database::connect();

			$sql = "SELECT * FROM djent WHERE id = :id:";

			try {
				$query = $db->query($sql,[
					'id' => $id,
				]);
			} catch (\Exception $e) {
				die($e->getMessage()); 
			}

				return $query->getResultArray()[0];
		}
	}
