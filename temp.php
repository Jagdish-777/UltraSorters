<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .controlsDesc {
    display: none;
    margin-left: 35%;
}

.controlsDesc.active {
    display: block;
}

.selects.toggle {
    text-align: center;
}

@media screen and (max-width: 786px) {
    .Comaas_Uniqueness {
        width: 100%;
    }

    .Working_Principles>img {
        width: 100%;
    }

    .Advanced_Technology {
        display: flex;
        flex-direction: column;
    }

    .Advanced_Technology>div>div>img {
        margin: 2%;
        text-align: center;
        margin-left: 40%;
    }

    .selects.toggle {
        margin-right: 25%;
    }

    .controlsDesc.active {
        margin-left: 15%;
    }
}
.top-bar-heading {
    color: black;
}

    </style>
</head>
<body>
<?php 
    include("./zpress/connections/dbconnect.php");
    $technology_query = "SELECT * FROM `technologies`";
    $technology_result = mysqli_query($con, $technology_query);
    $var = 0;
?>

<?php foreach ($technology_result as $row => $header) : ?>
    <div class="Advanced_Technology">
        <div>
            <h4><?= $header['name'] ?></h4>
            <div class="selects selects<?= $var ?>">
                <img src="./Images/Technology/<?= $header['image'] ?>" alt="Controller photo">
            </div>
            <div class="controlsDesc controlsDesc<?= $var ?>">
                <?= $header['description'] ?>
            </div>
        </div>
    </div>
    <?php $var++; ?>
<?php endforeach; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selects = document.querySelectorAll('.selects');
        selects.forEach(select => {
            select.addEventListener('click', function() {
                const index = this.classList[1].slice(-1);
                const controlsDesc = document.querySelector('.controlsDesc' + index);
                controlsDesc.classList.toggle('active');
                this.classList.toggle('toggle');
            });
        });
    });
</script>

    
</body>
</html>