import cv2
import sys

# Mendapatkan path gambar dari argumen command line
image_path = sys.argv[1]

# Mendapatkan path ke file cascade
cascade_path = os.path.join(current_dir, 'public', 'haarcascade_frontalface_default.xml')

# Muat model deteksi wajah Haar Cascade
face_cascade = cv2.CascadeClassifier(cascade_path)

# Baca gambar
image = cv2.imread(image_path)

# Ubah gambar menjadi skala abu-abu
gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

# Lakukan deteksi wajah
faces = face_cascade.detectMultiScale(gray, scaleFactor=1.1, minNeighbors=4)

# Koneksi ke database
cnx = mysqli.connector.connect(user='username', password='password', host='localhost', database='vektor2')
cursor = cnx.cursor()

# Simpan jumlah wajah ke dalam database
jumlah_wajah = len(faces)
query = "INSERT INTO transaksi (jumlah_kepala) VALUES (%s)"
values = (jumlah_wajah,)
cursor.execute(query, values)
cnx.commit()

# Tutup koneksi database
cursor.close()
cnx.close()


