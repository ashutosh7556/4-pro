 <?php include 'voters.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/images2.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <style type="text/css">
        /* Ensure the large image takes a larger size */ 

    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Left Side - EC-Officer Section (Smaller) -->
        <div class="col-md-2 ec-officer">
            <h3 class="section-title">Hon'ble Commission</h3>

            <div class="ec-box">        
                <div class="photo-frame">
                    <a href="https://www.eci.gov.in/cec-shri-gyanesh-kumar">
                        <img src="images/gyaneskumar.jpg" alt="Shri Gyanesh Kumar" class="img-fluid">
                    </a>
                </div>
                <h4>Shri Gyanesh Kumar</h4>
                <p>Chief Election Commissioner</p>
            </div>

            <div class="ec-box">
                <div class="photo-frame">
                    <a href="https://www.eci.gov.in/cec-shri-gyanesh-kumar">
                        <img src="images/Sandhu.jpg" alt="Dr. Sukhbir Singh Sandhu" class="img-fluid">
                    </a>
                </div>
                <h4>Dr. Sukhbir Singh Sandhu</h4>
                <p>Election Commissioner</p>
            </div>

            <div class="ec-box">
                <div class="photo-frame">
                    <a href="https://www.eci.gov.in/cec-shri-gyanesh-kumar">
                        <img src="images/joshi.png" alt="Dr. Vivek Joshi" class="img-fluid">
                    </a>
                </div>
                <h4>Dr. Vivek Joshi</h4>
                <p>Election Commissioner</p>
            </div>
        </div>

        <!-- Photo Gallery Section -->
        <div class="col-md-7 photo-gallery" style="border: 8px solid skyblue;">
            <div class="row">
                <div class="col-md-6">
                    <div class="photo-frame">
                        <img src="images/president.jpg" alt="President" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="photo-frame">
                        <img src="images/group.jpg" alt="Group" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="photo-frame">
                        <img src="images/03.jpg" alt="Image 03" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="photo-frame">
                        <img src="images/004.jpg" alt="Image 004" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Section -->
<div class="col-md-3 right-section">
    <div class="photo-image mb-4">
        <img src="images/005.jpg" alt="Image 005" class="img-fluid large-image">
    </div>

    <!-- Video Link -->
    <div class="photo-video">
        <a href="https://www.youtube.com/embed/to324JIljf8">
            <img src="images/006.jpg" alt="Image 006" class="img-fluid">
        </a>
    </div>
</div>

    </div>
</div>

</body>
</html>
