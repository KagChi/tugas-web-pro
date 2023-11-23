<html>
<?php
    include "components/head.php";
?>

<body class="flex justify-center items-center">
    <div class="flex flex-col md:flex-row w-3/4 bg-[#7071E8] h-2/3 md:h-1/2 rounded-md">
        <div class="flex w-full md:w-72 h-32 md:h-full overflow-hidden rounded-t-md md:rounded-t-none md:rounded-l-md md:rounded-tl-lg">
            <img class="object-cover h-full w-full" src="./public/images/home.png">
        </div>

        <form class="flex flex-col w-full pt-2 px-4 md:p-4 gap-2 h-full" method="POST" action="submit.php">
            <div class="flex w-full justify-center">
                <p class="text-white font-bold text-sm md:text-lg lg:text-2xl">Form Pemesanan Spareparts "OTO DESIGN"</p>
            </div>
            
            <div class="flex flex-col md:flex-row w-full mt-2 gap-2">
                <div class="flex flex-col w-full">
                    <p class="text-white font-bold">Nama</p>
                    <input name="nama" class="rounded-sm" required>
                </div>
                <div class="flex flex-col w-full">
                    <p class="text-white font-bold">Kode Sparepart</p>
                    <select name="type" class="rounded-sm">
                        <option value="B001">Busi NGK-100</option>
                        <option value="G002">GearSheet-MTX</option>
                        <option value="R003">Arm-BlackMX</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col w-full">
                <p class="text-white font-bold">Jumlah Beli</p>
                <input name="jumlah" class="rounded-sm" type="number" required>
            </div>

            <div class="flex flex-col w-full h-full">
                <p class="text-white font-bold">Alamat</p>
                <textarea name="alamat" class="rounded-sm h-full" style="resize: none;" required> </textarea>
            </div>

            <div class="flex flex-col md:flex-row w-full h-16 gap-2">
                <button type="submit" class="bg-[#001B79] h-full w-full md:w-1/2 rounded-sm font-bold text-white text-center">
                    <p>Submit</p>
                </button>

                <button type="reset" class="bg-[#001B79] h-full w-full md:w-1/2 rounded-sm font-bold text-white text-center">
                    <p>Reset</p>
                </button>
            </div>
        </form>
    </div>
</body>
<?php
    include "components/footer.php";
?>
</html>