<h2>Games</h2>

<a href="<?php echo URL; ?>/game/input" class="btn">Input Game</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>GENRE</th>
            <th>PLATFORM</th>
            <th>DEVELOPER</th>
            <th>PUBLISHER</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['genre']; ?></td>
                  <td><?php echo $row['platform']; ?></td>
                  <td><?php echo $row['developer']; ?></td>
                  <td><?php echo $row['publisher']; ?></td>
                  <td><a href="<?php echo URL; ?>/game/edit/<?php echo $row['id_game']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/game/delete/<?php echo $row['id_game']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>