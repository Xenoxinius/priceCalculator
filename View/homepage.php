<?php require 'includes/header.php' ?>
<div class="form-group">
    <h1 class="ml-5 mt-2">Price calculator</h1>
    <form action="#" method="post" class="pl-5 pt-1">
        <div class="row mt-2">
            <section>
                <div class="form-group" class="col">
                    <label for="users" class="ml-3">Choose a person:</label>
                    <select id="users" name="users" class="form-control ml-3">
                        <?php for ($i = 0; $i < count($userArray); $i++): ?>
                            <?php if ($_POST['users'] == $i): ?>
                                <option value='<?php echo $userArray[$i]->getId() ?>'
                                        selected='selected'> <?php echo $userArray[$i]->getName() ?></option>
                            <?php else: ?>
                                <option value='<?php echo $userArray[$i]->getId() ?>'> <?php echo $userArray[$i]->getName() ?></option>

                            <?php endif; ?>
                        <?php endfor; ?>

                    </select>
                </div>
            </section>
            <section>
                <div class="form-group" class="col">
                    <label for="product" class="ml-4">Choose a product:</label>
                    <select name="product" id="product" class="form-control ml-4">
                        <?php for ($i = 0; $i < count($productArray); $i++): ?>
                            <?php if ($_POST['product'] == $i): ?>
                                <option value="<?php echo $productArray[$i]->getProductId() ?>"
                                        selected='selected'>  <?php echo $productArray[$i]->getProductName() ?></option>
                            <?php else: ?>
                                <option value='<?php echo $productArray[$i]->getProductId() ?>'> <?php echo $productArray[$i]->getProductName() ?></option>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </select>
                </div>
            </section>
            <section>
                <div class="form-group" class="col">
                    <label for="quantity" class="ml-5">Qty:</label>
                    <select id="quantity" name="quantity" class="form-control ml-5">
                        <?php for ($z = 0; $z < 51; $z++): ?>
                            <?php if ($_POST['quantity'] == $z): ?>
                                <option value="<?php echo $z; ?>" selected="selected"><?php echo $z; ?></option>
                            <?php else: ?>
                                <option value="<?php echo $z; ?>"><?php echo $z; ?></option>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </select>
                </div>
            </section>
        </div>
        <input type="submit" value="require" name="submitButton" class="btn btn-secondary">
    </form>
</div>
<div class="card ml-5" style="width: 18rem;">

    <div class="card-header">
        <p>You are <?php echo $userArray[$userId]->getName() ?> and you have chosen: </p>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $productArray[$productId]->getProductName(); ?></h5>
        <p class="card-text"><?php echo $productArray[$productId]->getProductDescription() ?></p>
        <H3><?php echo $finalTotalResult; ?>€ </H3><small>(price with reduction)</small>
    </div>
</div>
<section class="pl-5 pr-5">
    <table class="table mt-2">
        <thead>
        <tr>
            <th scope="col">#client-id</th>
            <th scope="col">client-name</th>
            <th scope="col">product-name</th>
            <th scope="col">original price</th>
            <th scope="col">fixed-discount</th>
            <th scope="col">variable-discount</th>
            <th scope="col">reduced price per unit</th>
            <th scope="col">quantity</th>
            <th scope="col">reduced total price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"><?php echo $userArray[$userId]->getId() ?></th>
            <td><?php echo $userArray[$userId]->getName() ?></td>
            <td><?php echo $productArray[$productId]->getProductName() ?></td>
            <td><?php echo $productArray[$productId]->getProductPrice() . " €"; ?></td>
            <td><?php echo $countFixed ?></td>
            <td><?php echo $maxVariable . "%" ?></td>
            <td><?php echo $finalResult; ?></td>
            <td><?php echo $quantity; ?></td>
            <td><?php echo $finalTotalResult; ?></td>
        </tr>
        </tbody>
    </table>
</section>
<?php require 'includes/footer.php' ?>
