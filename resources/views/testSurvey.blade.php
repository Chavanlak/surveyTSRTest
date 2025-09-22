<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบสอบถามความพึงพอใจของลูกค้า</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .survey-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }

        h1, h2 {
            text-align: center;
            color: #2c3e50;
        }

        h1 {
            font-size: 2.2em;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 1.6em;
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
            color: #666;
        }

        .section {
            margin-bottom: 30px;
        }

        .question {
            margin-bottom: 20px;
        }

        .question p {
            text-align: left;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .star-rating {
            display: flex;
            justify-content: center;
            gap: 10px;
            font-size: 2em;
        }

        .star-rating .fa-star {
            color: #ccc;
            transition: color 0.2s ease-in-out;
        }

        .star-rating .fa-star.active,
        .star-rating .fa-star.hover {
            color: #f39c12;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 1em;
        }

        textarea {
            resize: vertical;
        }

        button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        button:hover {
            background-color: #2980b9;
        }

        hr {
            border: 0;
            height: 1px;
            background-color: #ddd;
            margin: 30px 0;
        }
    </style>
</head>
<body>
    <div class="survey-container">
        <h1>แบบสอบถามความพึงพอใจของลูกค้า</h1>
        <p>กรุณาแสดงความคิดเห็นเกี่ยวกับประสบการณ์การเข้าพักของท่าน ณ โรงแรม Tana Spring Resort เพื่อช่วยให้เราพัฒนาการบริการให้สมบูรณ์แบบยิ่งขึ้น</p>

        <form id="satisfaction-form">
            <div class="section">
                <h2>ข้อมูลลูกค้า</h2>
                <div class="form-group">
                    <label for="name">ชื่อ-นามสกุล:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">อีเมล:</label>
                    <input type="email" id="email" name="email">
                </div>
            </div>
            <hr>

            <div class="section">
                <h2>ห้องพัก (Room Accommodation)</h2>
                <div class="question">
                    <p>ความพึงพอใจของท่านต่อการให้บริการห้องพัก</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="question">
                    <p>ความครบครันและคุณภาพของสิ่งอำนวยความสะดวกภายในห้องพัก</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="question">
                    <p>ความประทับใจต่อบรรยากาศและสภาพแวดล้อมของห้องพัก</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <hr>

            <div class="section">
                <h2>สถานที่และสิ่งอำนวยความสะดวก (Location & Facilities)</h2>
                <div class="question">
                    <p>ความสะดวกและเหมาะสมของทำเลที่ตั้งโรงแรม</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="question">
                    <p>ความพึงพอใจต่อสิ่งอำนวยความสะดวกต่างๆ ของโรงแรม</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <hr>

            <div class="section">
                <h2>อาหารและเครื่องดื่ม (Food & Beverage)</h2>
                <div class="question">
                    <p>การจัดบริการอาหารและเครื่องดื่มโดยรวม</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="question">
                    <p>ความพึงพอใจต่อรสชาติของอาหารและเครื่องดื่ม</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="question">
                    <p>ความหลากหลายและความเพียงพอของเมนูอาหาร</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <hr>

            <div class="section">
                <h2>บุคลากร (Service Staff)</h2>
                <div class="question">
                    <p>ความเป็นมิตรและการต้อนรับจากพนักงาน</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="question">
                    <p>ความสุภาพและมารยาทของพนักงาน</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="question">
                    <p>ความใส่ใจและความกระตือรือร้นของพนักงานในการบริการ</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="question">
                    <p>ความเต็มใจและความตั้งใจของพนักงาน</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="question">
                    <p>ความเพียงพอของจำนวนพนักงานเพื่อรองรับการให้บริการ</p>
                    <div class="star-rating">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <hr>

            <div class="section">
                <h2>ข้อเสนอแนะเพิ่มเติม (Additional Comments)</h2>
                <div class="form-group">
                    <p>กรุณาแสดงความคิดเห็นหรือข้อเสนอแนะเพิ่มเติม เพื่อให้เราพัฒนาการบริการให้ดียิ่งขึ้น</p>
                    <textarea id="comments" name="comments" rows="5"></textarea>
                </div>
            </div>
            <button type="submit">ส่งแบบสอบถาม</button>
        </form>
    </div>
</body>
</html
