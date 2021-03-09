<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="form_nilai.php" method="get" class="mt-3">
            
            <div class="form-group" action="formget.php" method="GET">
                    <label for="">Name</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                <label for="">Lesson</label>
                <select class="form-select form-control" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="">Web Programming</option>
                    <option value="">Database</option>
                    <option value="">Statiska</option>
                    <option value="">PKN</option>
                    <option value="">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> UTS Value</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">UAS Value</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assignment Value</label>
                    <input type="text" name="" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">
            </form>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" name="nama">Name :</li>
                    <li class="list-group-item" name="nim">Nim :</li>
                    <li class="list-group-item" name="lesson">Lesson:</li>
                    <li class="list-group-item" name="uts_value"> UTS Value : </li>
                    <li class="list-group-item" name="uas_value">UAS Value: </li>
                    <li class="list-group-item" name="assignment_value">Assignment Value </li>
                    <li class="list-group-item" name="value_total">Value Total:  </li>
                    <li class="list-group-item" name="value_in_alphabet">Value in Alphabet: </li>
                    
                    
                </ul>
                </div>
            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">C : Less than 40 </li>
                    
                    
                </ul>
                </div>
        </div>
        
    </div>


    <?php
      $nama = $_GET['nama'];
      $nim = $_GET['nim'];
      $lesson = $_GET['lesson'];
      $uts_value = $_GET['uts_value'];
      $uas_value = $_GET['uas_value'];
      $assignment_value = $_GET['assignment_value'];

      if(isset($_GET['nama']) 
        AND isset($_GET['nim'])
        AND isset($_GET['lesson'])
        AND isset($_GET['uts_value'])
        AND isset($_GET['uas_value'])
        AND isset($_GET['assignment_value'])){

        }else{
            echo "Silahkan Diisi Terlebih Dulu!";
        }

    ?>
</body>
</ht