<?php

namespace App\Models;

use App\Core\Model;

class Game extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_game";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama = $_POST['nama'];
            $genre = $_POST['genre'];
            $platform = $_POST['platform'];
            $developer = $_POST['developer'];
            $publisher = $_POST['publisher'];

            $sql = "INSERT INTO tb_game
            SET nama=:nama, genre=:genre, platform=:platform, developer=:developer, publisher=:publisher";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":genre", $genre);
            $stmt->bindParam(":platform", $platform);
            $stmt->bindParam(":developer", $developer);
            $stmt->bindParam(":publisher", $publisher);

            $stmt->execute();
      }

      public function edit($id_game)
      {
            $query = "SELECT * FROM tb_game WHERE id_game=:id_game";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id_game", $id_game);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama = $_POST['nama'];
            $genre = $_POST['genre'];
            $platform = $_POST['platform'];
            $developer = $_POST['developer'];
            $publisher = $_POST['publisher'];
            $id_game = $_POST['id'];

            /* if (!empty($password)) { */
            $sql = "UPDATE tb_game
            SET nama=:nama, genre=:genre, platform=:platform, developer=:developer, publisher=:publisher
            WHERE id_game=:id_game";
            /*} else {
                  $sql = "UPDATE tb_users
                  SET user_email=:user_email, user_full_name=:user_full_name
                  WHERE user_id=:user_id";
            } */

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":genre", $genre);
            $stmt->bindParam(":platform", $platform);
            $stmt->bindParam(":developer", $developer);
            $stmt->bindParam(":publisher", $publisher);
            $stmt->bindParam(":id_game", $id_game);

            $stmt->execute();
      }

      public function delete($id_game)
      {
            $sql = "DELETE FROM tb_game WHERE id_game=:id_game";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_game", $id_game);
            $stmt->execute();
      }
}
