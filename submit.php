<html>
<?php
    include "components/head.php";
    include "utilities/handle.php";
?>

<body class="flex justify-center items-center py-8">
    <div class="flex flex-col w-3/4 md:w-1/2 h-[34.5rem] bg-[#7071E8] rounded-lg">
        <div class="flex w-full h-16 overflow-hidden rounded-t-lg">
            <img class="object-cover h-full w-full" src="./public/images/home.png">
        </div>

        <div class="flex flex-col justify-center items-center p-2 gap-2">
            <div class="flex w-full items-center justify-center px-2 pb-2">
                <p class="text-white font-bold">Struk Pembelian Sparepart Oto Design</p>
            </div>
            <div class="w-full h-1 bg-[#192655] rounded-xl" />

            <div class="flex flex-col mt-2 px-4 gap-2 h-[22rem] md:h-96 overflow-y-auto">
                <div class="flex flex-row gap-2 w-full border rounded-md px-2">
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">Nama Pembeli</p>
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">
                        <?php
                            echo $Name
                        ?>
                    </p>
                </div>

                <div class="flex flex-row gap-2 w-full border rounded-md px-2">
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">Alamat</p>
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">
                        <?php
                            echo $Address
                        ?>
                    </p>
                </div>

                <div class="flex flex-row gap-2 w-full border rounded-md px-2">
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">Kode Sparepart</p>
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">
                        <?php
                            echo $Type
                        ?>
                    </p>
                </div>

                <div class="flex flex-row gap-2 w-full border rounded-md px-2">
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">Nama Sparepart</p>
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">
                        <?php
                            echo $ProductName
                        ?>
                    </p>
                </div>

                <div class="flex flex-row gap-2 w-full border rounded-md px-2">
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">Harga Sparepart</p>
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">
                        <?php
                            echo "Rp " . $Price
                        ?>
                    </p>
                </div>

                <div class="flex flex-row gap-2 w-full border rounded-md px-2">
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">Jumlah Beli</p>
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">
                        <?php
                            echo $Quanity
                        ?>
                    </p>
                </div>

                <div class="flex flex-row gap-2 w-full border rounded-md px-2">
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">Total Bayar</p>
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">
                        <?php
                            echo "Rp " . $Total
                        ?>
                    </p>
                </div>

                <div class="flex flex-row gap-2 w-full border rounded-md px-2">
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">Diskon</p>
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">
                        <?php
                            echo "Rp " . $Discount
                        ?>
                    </p>
                </div>

                <div class="flex flex-row gap-2 w-full border rounded-md px-2">
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">Grand Total</p>
                    <p class="text-white font-bold w-1/2 text-sm md:text-lg">
                        <?php
                            echo "Rp " . $GrandTotal
                        ?>
                    </p>
                </div>
            </div>
            
            <a href="index.php" type="submit" class="flex mt-2 bg-[#001B79] h-8 w-full rounded-sm font-bold text-white justify-center items-center">
                <p>Kembali</p>
            </a>
        </div>
    </div>
</body>

</html>