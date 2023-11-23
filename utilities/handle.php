<?php
    $Name = $_POST["nama"];
    $Type = $_POST["type"];
    $Quanity = (int) $_POST["jumlah"];
    $Address = $_POST["alamat"];
    $Price = 0;
    $ProductName = "Unknown";

    if ($Type === "B001") {
        $Price = 15000;
        $ProductName = "Busi NGK-100";
    } elseif ($Type === "G002") {
        $Price = 35000;
        $ProductName = "GearSheet-MTX";
    } elseif ($Type === "R003") {
        $Price = 40000;
        $ProductName = "Arm-BlackMX";
    } else {
        header("Location: error.php");
    }

    $Total = $Price * $Quanity;
    $DiscountPercentage = 0.0;

    if ($Quanity >= 5 && $Total >= 500000) {
        $DiscountPercentage = 0.15;
    } else if ($Quanity >= 5 && $Total >= 150000) {
        $DiscountPercentage = 0.10;
    }

    $Discount = $DiscountPercentage * $Total;
    $GrandTotal = $Total - (int) $Discount;
?>