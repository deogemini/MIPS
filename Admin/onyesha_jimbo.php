<?php include 'layouts/main.php'; ?>

<br />
<div class="container" id="viewjimbo">
    <h3 style="text-align: center;" class="display-4">Majimbo yaliyosajiliwa</h3>
    <br />
    <div class="table-responsive">
        <Table id="jimbo_data" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td class="font-weight-bold text-uppercase">jina la jimbo</td>
                    <td class="font-weight-bold text-uppercase">mkoa</td>
                    <td class="font-weight-bold text-uppercase">wilaya</td>
                    <td class="font-weight-bold text-uppercase">idadi ya kata</td>
                </tr>
            </thead>
            <?php
            include "db.php";
            $stmt = $pdo->query('SELECT * FROM jimbo ORDER BY ID DESC');
            while ($row = $stmt->fetch()) {
                echo '<tr>
            <td>' . $row->jinalajimbo . '</td>
            <td>' . $row->mkoa . '</td>
            <td>' . $row->wilaya . '</td>
            <td>' . $row->kata . '</td>
            </tr>';
            }
            ?>
        </Table>

    </div>



    <!--/ Main content End Here-->



    <?php include 'layouts/common_base.php' ?>