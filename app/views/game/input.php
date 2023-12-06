<h2>Input Game</h2>

<form action="<?php echo URL; ?>/game/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="nama" name="nama" required></td>
        </tr>
        <tr>
            <td>GENRE</td>
            <td><input type="genre" name="genre" required></td>
        </tr>
        <tr>
            <td>PLATFORM</td>
            <td><input type="platform" name="platform" required></td>
        </tr>
        <tr>
            <td>DEVELOPER</td>
            <td><input type="developer" name="developer" required></td>
        </tr>
        <tr>
            <td>PUBLISHER</td>
            <td><input type="publisher" name="publisher" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>