gaji = int(input("Masukkan gaji: "))
gajiSetahun = gaji*12
potongan = gajiSetahun * (2.5/100)
gaji_bersih = gajiSetahun - potongan
print("Gaji bersih ", gaji_bersih)