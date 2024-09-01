<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_traffy.css">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRutk5VX5j4vMXuJbAR2BcMCr1qRYAKOZ4WAg&s" type="image/x-icon">
    <title>Traffy Fondue</title>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <img src="https://c.traffy.in.th/assets/TraffyLogo-A1zlgBaG.png" alt="Traffy Logo" class="logo">
                <img src="https://c.traffy.in.th/assets/1555Logo-0q31Mp9M.png" alt="Additional Logo" class="additional-logo">
            </div>
            <div class="report-buttons">
                <button class="report-button">แจ้งปัญหาผ่านไลน์ <img src="data:image/png;base64,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"></button>
                <button class="report-button">Report in English<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKZSURBVHgBtZbbi41RGMafvZvIjSZGOcUqRG6UC0oZ34VCKXKvdtxRGuMPmEjiSi5c4sLNIDWZMUVqmMnIcVIiKRvFlGJGTiVje9753s9ae+31HbbdPPXbex3fdx3f9ZWQrzLpJLvIBrKazNe6r+QJeUAGyDBa1GHymtQc3pExcpeMe3VVUsF/aAW5p0Z+kz4yoQZ9vSJT5JLjWAZpUFBb1bh0vEZWankVYYdS9kvThlzUvh/JTuRotzb+iXg5fcN5DhN1q50/ZAdSZMgnbbg3xXBRh6IjamsCKcv7EvWbb1pweBB2W4QRv1NFK66Q85r+RvY16bCdnIGd2SEyqPn9fqeaM6suZ4Sn1VCew1XkufZ5hvikQ20m12laW7Sg1zNknIFUkX4tpGzKGeBZHaCrfq2L2mCP7nJy1Wv4liyDnfkkwiqrE6lfSM559Yv1X24B7qA+WmQxFnA21ET/kRJ/vpDvZBPyNYnGWc5yZpAlOalzoJ5HMfOS1amVNTMbM68f8iOH5jPpQLFg+wGNl7wdjacyJIN4+6afmaKb/jBgaLSJ/kNtakQOjDykbwIG9zjpjkD9Iif9ntwPtFlCNpKnkonU+4DXaB7ilzx537IuvjuLnkCbXq3rTApeaMFaza9xDN1CsdAWwX4BnCIlrTew0eqfDmjhdbIdNkwd9QxnOUyMJwN9jPh+ntR8xe84DLsscpq6AobzHIoWkBuws+rTdOR3NLAzO5ZiuIjDRMdRv7dRoA02I4788mnQ3aJDUY/aS3UocvfwAmxAKPoAr3PYhsa3NiiD+uN+GfnvYT/SL/yJpHEJ2aogXhbjlI2rE4n8ckCWOnUS+m56NuSzZbCow0RyYSXiyDKtJ3O1XOKw3OFHiE/j7TxDfwHJwhrXGNrCKAAAAABJRU5ErkJggg=="></button>
            </div>
        </div>
    </header>
    <!-- เพิ่มรูปภาพที่ต้องการที่นี่ -->
    <div class="image-container">
    <div class="image-wrapper">
            <a href="inform.php">
                <img src="https://storage.googleapis.com/traffy_public_bucket/attachment/2024-08/0c253a7c6bafec0c89b7f3ed28c09ece16b17fde.jpg" alt="Description of image 1">
                <div class="overlay">แจ้งปัญหา</div>
            </a>
        </div>
    <div class="image-wrapper">
        <div class="overlay">แก้ไขเสร็จสิ้น</div>
        <img src="https://c.traffy.in.th/assets/please_wait_img-sTb-3Msd.png" alt="Description of image 2">
    </div>
</div>


    <section class="status-section">
            <div style="display: flex; align-items: center; justify-content: space-between;">
                <div>
                <div class="date-time-report" style="background: rgb(255, 184, 0);"><p class="title-report">แจ้ง</p><div class="container-main-timestamp"><p class="txt-date">8</p><div class="container-timestamp"><p class="txt-month">ส.ค. 2567</p><p class="txt-month">15:37</p></div></div></div>
                <div class="date-time-report" style="background: rgb(255, 184, 0);"><p class="title-report">ดำเนินการ</p><div class="container-main-timestamp"><p class="txt-date">22</p><div class="container-timestamp"><p class="txt-month">ส.ค. 2567</p><p class="txt-month">15:55</p></div></div></div>
                    <div style="flex-grow: 1; margin-left: 20px;">
                    <p>ความคิดเห็นผู้แจ้ง</p>
                    <p>เปิดเรื่องใหม่: 0 ครั้ง</p>
                </div>
                </div>
                <div style="flex-grow: 1; margin-left: 20px;">
                    <div style="padding-bottom: 35px;">
                        <p>ทดสอบ</p>
                    </div>
                    <div style="padding-bottom: 33px;">
                    <p>เราจะพยายามหาทางแก้ไขปัญหาอย่างยั่งยืนเพื่อป้องกันไม่ให้เกิดปัญหานี้ซ้ำอีกครับ</p>
                    <p style="color: grey;">ใช้เวลา 14 วัน</p>
                    </div>
                    <p>ยังไม่มีความคิดเห็น</p>
                </div>
                <div style="flex-shrink: 0; margin-left: 20px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.9883260404818!2d100.59668239678953!3d14.077866400000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d7df51d35b21f%3A0xe360f3615838539c!2z4Lio4Li54LiZ4Lii4LmM4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14Lit4Li04LmA4Lil4LmH4LiB4LiX4Lij4Lit4LiZ4Li04LiB4Liq4LmM4LmB4Lil4Liw4LiE4Lit4Lih4Lie4Li04Lin4LmA4LiV4Lit4Lij4LmM4LmB4Lir4LmI4LiH4LiK4Liy4LiV4Li0IChORUNURUMp!5e0!3m2!1sth!2sth!4v1725157810249!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <div class="container-bottom-data">
  <p>#2024-HTZN66</p>
  <svg xmlns="http://www.w3.org/2000/svg" width="2" height="20" viewBox="0 0 2 20" fill="none">
    <path d="M1 0L1 20" stroke="black" stroke-opacity="0.5"></path>
  </svg>
  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAACXBIWXMAACxLAAAsSwGlPZapAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAVpSURBVHgB3ZpbiFVVGMf/o5JRqd0smso5lUVppoZGF4vB7PJg1ktRJilIVBT0EBg+TI4JWlFIQQxdBwTDeumCRhmhXSykoskxo5tnLLubSmVZefv+7HNg7W+fvfbax7X2OWd+8IezZr5123vtb61vrdWGsBwrOlfUKZokmiwaLRohahP9Jdom2i56X/SOaLPoD7QY00SrEDX8YE79LVopGo8W4HLRW8jfyTS9LLoAHmmDHzh0l4nutNj8INoo+km0C1GHRonOFp0nKlny9ojuF/2JJoBv4FPUfkN82wtEpzqUM1Z0l2hNSllfis5Ag5mA2t/pWtEU1A/f+hs1yqWTOx8N4hrRTsQbNCC6Cf6YVynTrIN1XouCKSHypmZD+kSnwT8lUb+qiz6gsOHdLvpWNeBV0TEIx9GiN1WdZdEJKIDnkHyzRyE8rOMjVfezyEneaYke+TMjPSCaKtrhlh0TK/YnV+rmKmuTKtMGRxdnhJMq6X2i6aL3EAjOo+YTnu2QZ6joXtEXSF9gcMq5HW5cp/KuRyBuVBX1OuS5FEkva1O5kieLFSrf1QjA66qSUob9LETzZj1r6VkZZY9XeVbAM/SSexBfWNi4AcmOcCrpQvQdDxcNQ7Q46Rb9WMO+M6OOdYYtFz8j4JGZqjFzLLasuIzktHWiJc8YRIGCmecr2L3/bGU/Ex55yij4f9jn3AdVQ16C+2zwosrbbbEdKdpr2D4Jj2wwCt5gsRuCaKoxndApcOc40feILyNtb/lDw/ZjODAEbkwyfvdZ7GYgGp5VliMKB13hd95jpPkAbMGC2ZaxcMClw/wmzae8zWJbUumNyM/bKj3OYvuN8XtURVZcOjxSpXdabEertG00pNGv0rZPYrdKZ3pqlw4PVekDcOcg8vOfSg+DO5nO0aXDe1Ta9hR/U+kO5EcP4e0WWz2EM7eAXDpMR/KPkbbFob+o9HTk52KVLlts243f/yI5xOuGi/uq+19tseMTN5eTdFp5I7Kvjfx7YXdEaw3bT+CRXqPg32EfGY8hvnhYCnceUnmfzrDfYdiugkfuVg2ZbLGlp96l7LuQzWKV52fYfcAUZX8HPHKWKnxJhv1tqB3zcg1ubsscj2ijblMN+6z4WC9hz4FnzH2sfgf7bqSHgIyO6H0PpPy/26H8LYb9FgSgRzXKZXOdbynP+RJt5zqUO1HlewIB6FSVLHbMV0J0OGbbDOA3z/DwdMcyH1H5r3TMl3vKoOu/sPKbc14H3I82jxBdhWgTj/MnPT0jI0Y565Fc4KTBaYqxcnUjj3tl4xAI7a1dvK9v7lFtmIeAHIn4lEPn4+sE0pXvEI+3XUPculmG+BOej+KYr+pejgJgUL7bqPRXeN5AS4HbSmXEHd0YFEQX4k96EcKjFxoPoED4tM23zKcd8mCLb9Kcz+k7hqNgFiD+xHsRjmdUXQvRALgT0qcaMgP+uV7VsRUN5DLEG/M5/A41TjllVUewRYYrq5F/4e/KIlX2SjQBDCK4tWM27AocPpeI9htlDiDMlYq6mIt4h3mN8HBXYJtR4BKyHriBbjbwYdTPUlXWGjQhDO14rFJtJIP7acjPVMQ7yzJLaFJuQbyxDOPyLDt5Dq298q1ocrTXzrMb8bjK+wpaAH3k6bojMUfl4ZtuR4ugT+f5AGzbNyUkh7LPK4yFoIfnu0ifqj5Qto+iBWFEpa8V17pPvVDZcMu1iJt9QbgI0Z2Qamd4JWmC8f8z1f85lbXE1X8b9yHpjLiDyelqKxoY1IdkHeId40pqifrbaxhElBAPMPQRC++NdGCQoQN5UzdjkPICkp19HoMYbvSZ9yrpwJomxg0Ft2jY0QEEONPN4hB6dXIOrjPXMgAAAABJRU5ErkJggg==">
  <p>112 อุทยานวิทยาศาสตร์ ถนนพหลโ ยธิน ตำบล คลองหนึ่ง อำเภอคลองหลวง ปทุมธานี 12120 ประเทศไทย</p>
  <svg xmlns="http://www.w3.org/2000/svg" width="2" height="20" viewBox="0 0 2 20" fill="none">
    <path d="M1 0L1 20" stroke="black" stroke-opacity="0.5"></path>
  </svg>
  <div class="tags-problemType" style="margin: 0px; padding: 0.2rem 0.5rem;">
    <p>อื่นๆ</p>
  </div>
</div>

<section class="status-section" style="margin-top: 20px;">
  <div class="d-flex">
    <div class="timeline-container">
      <p style="display: inline; margin-right: 0.5rem;">รับเรื่อง</p>
      <span class="timeline-detail-time last" style="display: inline;">ใช้เวลา 14 วัน 18 นาที</span>
      <p class="timeline-detail-time"></p>
      <span class="timeline-detail-time last" style="display: inline;">22 ส.ค. 67</span>
      <p style="display: inline;">เราจะพยายามหาแนวทางแก้ไขปัญหาอย่างยั่งยืนเพื่อป้องกันไม่ให้เกิดปัญหานี้ซ้ำอีกครับ</p>
      <p class="timeline-detail-time">15:55 น.</p>
    </div>
    <div class="timeline-box">
      <span class="timeline-step-icon color-state-inprogress"></span>
    </div>
  </div>

  <div class="d-flex">
    <div class="timeline-container">
      <p style="display: inline; margin-right: 0.5rem;">รอรับเรื่อง</p>
      <span class="timeline-detail-time last" style="display: inline;">ทดสอบ</span>
      <p class="timeline-detail-time"></p>
      <span class="timeline-detail-time last" style="display: inline;">8 ส.ค. 67</span>
      <p style="display: inline;"></p>
      <p class="timeline-detail-time">15:55 น.</p>
      <img class="img" src="https://storage.googleapis.com/traffy_public_bucket/attachment/2024-08/0c253a7c6bafec0c89b7f3ed28c09ece16b17fde.jpg" alt="Description of image 1">
    </div>
    <div class="timeline-box">
      <span class="timeline-step-icon color-state-inprogress"></span>
    </div>
  </div>
</section>
    <footer style="margin-top: 20px;" >
        <p>Traffy Fondue</p>
    </footer>
</body>
</html>
