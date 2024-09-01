<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="https://fonduereport.traffy.in.th/static/media/Fondue_App_Icon.781d15ada52b2682fb72.png" type="image/x-icon">
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

    <main>
        <div class="form-container">
            <h2>กรุณากรอกรหัสผ่านเพื่อดูข้อมูล</h2>
            <form action="main.php" method="post">
                <label for="ticket-id">Ticket ID</label>
                <input type="text" id="ticket-id" name="ticket_id" placeholder="กรอก Ticket ID เช่น 2023-ABCOP" required>
                <label for="access-code">รหัสเข้าดู</label>
                <input type="password" id="access-code" name="access_code" placeholder="กรอกรหัสเข้าดู" required>
                <button type="submit">ยืนยัน</button>
            </form>
        </div>
    </main>

    <footer>
        <p>Traffy Fondue</p>
    </footer>
</body>
</html>
