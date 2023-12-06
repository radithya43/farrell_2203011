<h2>Edit Game</h2>

<form action="<?php echo URL; ?>/game/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_game']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="nama" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>GENRE</td>
            <td><input type="genre" name="genre" value="<?php echo $data['row']['genre']; ?>" required></td>
        </tr>
        <tr>
            <td>PLATFORM</td>
            <td><input type="platform" name="platform" value="<?php echo $data['row']['platform']; ?>" required></td>
        </tr>
        <tr>
            <td>DEVELOPER</td>
            <td><input type="developer" name="developer" value="<?php echo $data['row']['developer']; ?>" required></td>
        </tr>
        <tr>
            <td>PUBLISHER</td>
            <td><input type="publisher" name="publisher" value="<?php echo $data['row']['publisher']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>