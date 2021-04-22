Proje zend 2 framework ile yapılmıştır.

1) Projeyi Çalıştırmak

1.1)Php Komutu İle

Php yüklü bir bilgisayarda projenin bulunduğu klasörde  php -S 0.0.0.0:8080 -t public cmd komutunu çalıştırarak ayağa kaldırıp 
tarayıcıda localhost:8080 linki ile açabilirsiniz.

1.2)Docker Komutu İle

Projenin bulunduğu klasörde docker-compose-up cmd komutu çalıştırarak docker image'ı oluşturup sonrasında tarayıcıda localhost:8080 linki ile açabilirsiniz.

2)Ekranlar

2.1)İlk Ekran

Ana sayfada çevirilmesini istediğiniz metni yazabileceğiniz bir textarea,üstünde yazdığınız metinde arama yapabileceğiniz bir textbox ve google'ın 
desteklediği diller combobox'ta gelmektedir. 

Aramada yazdığınız kelimeler metin kısmında var ise highlight edilmektedir.Arama seçeneği olarak kelimeleri ayırarak arama ve büyük/küçük uyumu seçenekleri vardır.

Metni yazıp hedef dili seçtikten sonra çeviri bastıktan sonra karşınıza ikinci sayfada google translate api tarafından metnin çevirilmiş hali gelecektir.

2.2)İkinci Ekran

Öncesinde arama kısmında yazdığınız kelimeler çevirinin içinde var ise bold olarak gösterilmektedir.

Geri butonuna basarak ilk sayfaya gelebilirsiniz.

Tercih sebebi artı özellikler:

DockerFile dosyası oluşturulmuştur ve kullanıma hazırdır.

Javascript kullanılarak ilk arama kutusunda yazılan kelimeler metin kısmında highlight edilmektedir

Session'da tutulan çeviri kullanım sayısı 3'tür. Daha sonrasında sayfada 'Çeviri Hakkınız Bitmiştir' uyarısını göreceksiniz.
