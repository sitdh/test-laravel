# ขั้นตอนการติดตั้ง

- คัดลอกไฟล์ `.env.example` มายัง `.env`
```bash
$ cp .env.example .env
```

- อัพเดตข้อมูลไลบรารี่ผ่าน `composer`
```bash
$ composer update
```

- สร้างคีย์สำหรับ Laravel 
```bash
$ php artisan key:generate
```

- ปรับแก้การเชื่อมต่อกับฐานข้อมูลภายในไฟล์ `.env`

- สร้างฐานข้อมูลด้วยคำสั่ง migrate
```bash
$ php artisan migrate
```