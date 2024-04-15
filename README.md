# Sürücü Kursu Kayıt Sitesi

Bu proje, sürücü kursları için basit bir kayıt sitesi taslağıdır. Bu site, kullanıcıların adlarını, soyadlarını, e-posta adreslerini ve telefon numaralarını kaydetmelerini sağlar.

## Nasıl Kullanılır

1. Bu projeyi klonlayın veya indirin.
2. Veritabanı bağlantısı için gerekli bilgileri `kayit.php` dosyasında güncelleyin.
3. MySQL veritabanında `surucu_kursu` adında bir veritabanı oluşturun ve `kayitlar` adında bir tablo ekleyin. Tablonun sütunları şunlar olmalıdır: `id` (otomatik artan), `ad`, `soyad`, `email`, `telefon`.
4. Proje klasörünü bir web sunucusuna yükleyin veya bir localhost sunucusunda çalıştırın.
5. Tarayıcınızda `index.html` dosyasını açarak kayıt formunu görebilirsiniz.

## Katkıda Bulunma

1. Bu depoyu çatallayın (fork).
2. Yeni bir dal (branch) oluşturun: `git checkout -b yeni-ozellik`
3. Değişikliklerinizi yapın ve bunları kaydedin (commit): `git commit -am 'Yeni özellik eklendi'`
4. Dalınıza yükleyin (push): `git push origin yeni-ozellik`
5. Bir birleştirme isteği (pull request) gönderin.

## Lisans

Bu proje MIT lisansı altında lisanslanmıştır. Daha fazla bilgi için `LICENSE` dosyasına bakın.
