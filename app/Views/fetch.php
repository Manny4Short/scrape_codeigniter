<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href='<?=base_url()?>\bootstrap\bootstrap@5.1.3.min.css'>

</head>

<body>
    <div class='container'>

        <div class="d-flex justify-content-center">

            <h2>Table displaying data</h2>
        </div>



        <table class='table  table-striped'>

            <thead>
                <tr>
                    <td>image</td>
                    <td>product_name</td>
                </tr>

            </thead>

            <tbody>

                <?php
                foreach ($jumia['image'] as $key => $value) {
                    ?>
                <tr>
                    <td><a href="<?= $jumia['image'][$key]?>">
                            <?= $jumia['image'][$key] ?>
                    </td>
                    <td><?= $jumia['product_name'][$key] ?></td>
                </tr>
                <?php
                }
                ?>

            </tbody>

        </table>

    </div>

    </div>
    <script src=" <?=base_url()?>\bootstrap\bootstrap@5.1.3.bun.min.js">
    </script>
</body>

</html>