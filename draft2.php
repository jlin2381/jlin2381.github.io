<?php 
  include'includes/head.php';
  include'includes/nav.php'; 
?>
<html>

<body>
    <h1>Draft Board</h1>
    <table border="1">
        <tr>
            <th>Round</th>
            <?php for ($team = 1; $team <= 12; $team++) : ?>
                <th>Team <?php echo $team; ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($round = 1; $round <= 16; $round++) : ?>
            <tr>
                <td><?php echo $round; ?></td>
                <?php for ($team = 1; $team <= 12; $team++) : ?>
                    <td>
                        <form action="update_draft.php" method="post">
                            <select name="player_id">
                                <option value="">Select Player</option>
                                <?php
                                // Query the database to fetch undrafted players
                                // and populate the dropdown list
                                $query = "SELECT id, name FROM players WHERE drafted = 0";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value=\"" . $row['id'] . "\">" . $row['name'] . "</option>";
                                }
                                ?>
                            </select>
                            <input type="hidden" name="round" value="<?php echo $round; ?>">
                            <input type="hidden" name="team" value="<?php echo $team; ?>">
                            <input type="submit" value="Draft">
                        </form>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>


            
            