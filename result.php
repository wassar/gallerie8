<?php if(empty($_POST['search'])) die(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gallerie8</title>
    </head>
    <body>
        <table>
            <?php if (count($gallerie->items) > 0): ?>
            <thead>
                <tr>
                    <th></th>
                    <th>item</th>
                    <th>seller</th>
                    <th>price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gallerie->items as $item) : ?>
                <tr>
                    <td>
                        <img src="<?= $item->image ?>" alt="<?= $item->name ?>">
                    </td>
                    <td>
                        <a href="<?= $item->link ?>"><?= $item->name ?></a>
                    </td>
                    <td>
                        <a href="<?= $item->sellerLink ?>"><?= $item->seller ?></a>
                    </td>
                    <td>
                        <?= $item->price ?>
                    </td>
                </tr>
            <?php endforeach;else: ?>
                <center>Nothing Found !</center>
            <?php endif; ?>
            </tbody>
        </table>
    </body>
</html>
