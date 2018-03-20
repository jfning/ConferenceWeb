<?php
require_once('util/secure_conn.php');
require_once('model/paper.php');
require_once('model/paper_db.php');
$papers = PaperDB::getPapersByReviewerID($reviewer_id);
?>
<section>
    <h1>Reviewer Menu</h1>
</section>
<section>
    <table>
        <thead>
            <th>Author Name</th><th>Title</th><th>Area</th><th>Subarea</th><th>FileName</th>
        </thead>
        <tbody class="smaller">
        <?php foreach ($papers as $paper) : ?>
            <tr>
                <td><?php echo htmlspecialchars($paper->getAuthorName()); ?></td>
                <td><?php echo htmlspecialchars($paper->getTitle()); ?></td>
                <td><?php echo htmlspecialchars($paper->getAreaName()); ?></td>
                <td><?php echo htmlspecialchars($paper->getSubareaName()); ?></td>
                <td>
                    <a href="papers/<?php echo htmlspecialchars($paper->getFileName()); ?>">
                    <?php echo htmlspecialchars($paper->getFileName()); ?></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <p>
        <a href="?action=logout"><strong>Logout</strong></a>
    </p>
</section>