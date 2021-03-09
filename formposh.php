<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="belanja.php" method="post" class="mt-3">
            
            <div class="form-group" action="formposh.php" method="POST">
                    <label for=""> Customer</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="" id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" id="inlineRadio2" value="kulkas">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" id="inlineRadio3" value="mesin cuci" disabled>
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for=""></label>
                    <input type="date" name="" value="" class="form-control">
                </div>
                <label for="">Courier Type</label>
                <select class="form-select form-control" class="form-control">
                    <option selected>Choose Courier Type :</option>
                    <option value="">Tiki</option>
                    <option value="">Si Cepat</option>
                    <option value="">Pos</option>
                    <option value="">Grab</option>
                    <option value="">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="" class="btn btn-success btn-sm btn-block">
            </form>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" name="customer">Customer :</li>
                    <li class="list-group-item" name="item">Item : </li>
                    <li class="list-group-item" name="data_shipping">Date Shipping :  </li>
                    <li class="list-group-item" name="courier_type">Courier Type :</li>
                    <li class="list-group-item" name="shipping_address">Shipping Address :</li>
                    <li class="list-group-item" name="courier_cost">Courier Cost : </li>
                    <li class="list-group-item" name="assurance_cost">Assurance Cost :  </li>
                    <li class="list-group-item" name="total_cost">Total Cost :</li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
    </div>

    <?php
      $customer = $_POST['customer'];
      $item = $_POST['item'];
      $data_shipping = $_POST['data_shipping'];
      $courier_type = $_POST['courier_type'];
      $shipping_addreas = $_POST['shipping_addreas'];
      $courier_cost = $_POST['courier_cost'];
      $assurance_cost = $_POST['assurance_cost'];
      $total_cost = $_POST['total_cost'];

      if(isset($_POST['customer']) 
        AND isset($_POST['item'])
        AND isset($_POST['data_shippingson'])
        AND isset($_POST['courier_type'])
        AND isset($_POST['shipping_addreas'])
        AND isset($_POST['courier_cost'])
        AND isset($_POST['assurance_cost'])
        AND isset($_POST['total_cost'])){

        }else{
            echo "Silahkan Diisi Terlebih Dulu!";
        }

    ?>
</body>
</html>