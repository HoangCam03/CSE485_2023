` btth01_cse485`` btth01_cse485`CREATE TABLE tacgia (
  ma_tgia INT UNSIGNED NOT NULL PRIMARY KEY,
  ten_tgia VARCHAR(100) NOT NULL,
  hinh_tgia VARCHAR(100)
)DEFAULT CHARSET=utf8 COLLATE=UTF8_UNICODE_CI;

` btth01_cse485`CREATE TABLE baiviet (
  ma_bviet INT UNSIGNED NOT NULL PRIMARY KEY,
  tieude VARCHAR(200) NOT NULL,
  ten_bhat VARCHAR(100) NOT NULL,
  ma_tloai INT UNSIGNED NOT NULL, -- Khóa ngoại tham chiếu đến bảng theloai
  tomtat TEXT NOT NULL,
  noidung TEXT,
  ma_tgia INT UNSIGNED NOT NULL, -- Khóa ngoại tham chiếu đến bảng tacgia
  ngayviet DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  hinhanh VARCHAR(200)
)DEFAULT CHARSET=utf8 COLLATE=UTF8_UNICODE_CI;
` btth01_cse485`
CREATE TABLE theloai (
  ma_tloai INT UNSIGNED NOT NULL PRIMARY KEY,
  ten_tloai VARCHAR(50) NOT NULL
)DEFAULT CHARSET=utf8 COLLATE=UTF8_UNICODE_CI;
  
  
Liet ke cac bai hat 
SELECT * FROM baiviet
WHERE ma_tloai = (SELECT ma_tloai FROM theloai WHERE ten_tloai = 'Nhac tru tinh');

SELECT * FROM baiviet
WHERE ma_tgia = (SELECT ma_tgia FROM tacgia WHERE ten_tgia = 'Nhacvietplus');

SELECT * FROM theloai
WHERE ma_tloai NOT IN (SELECT ma_tloai FROM baiviet WHERE noidung = 1);

SELECT bv.ma_bviet, bv.tieude, bv.ten_bhat, tg.ten_tgia, tl.ten_tloai, bv.ngayviet
FROM baiviet bv
INNER JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
INNER JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai;

--u e: Tìm thể loại có số bài viết nhiều nhất
SELECT tl.ten_tloai, COUNT(*) AS so_bai_viet
FROM baiviet bv
INNER JOIN theloai tl ON bv.ma_tloai = tl.ma_tloai
GROUP BY tl.ten_tloai
ORDER BY so_bai_viet DESC
LIMIT 1;

--Liệt kê 2 tác giả có số bài viết nhiều nhất

SELECT tg.ten_tgia, COUNT(*) AS tieude
FROM baiviet bv
INNER JOIN tacgia tg ON bv.ma_tgia = tg.ma_tgia
GROUP BY tg.ten_tgia
ORDER BY tieude DESC
LIMIT 2;

---Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ "yêu", "thương", "anh", "em": 
SELECT *
FROM baiviet
WHERE ten_bhat LIKE '%yêu%' 
   OR ten_bhat LIKE '%thương%'
   OR ten_bhat LIKE '%anh%'
   OR ten_bhat LIKE '%em%';
   
---  
SELECT *
FROM baiviet
WHERE tieude LIKE '%yêu%' 
   OR tieude LIKE '%thương%'
   OR tieude LIKE '%anh%'
   OR tieude LIKE '%em%'
   OR ten_bhat LIKE '%yêu%' 
   OR ten_bhat LIKE '%thương%'
   OR ten_bhat LIKE '%anh%'
   OR ten_bhat LIKE '%em%';



---. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả: 
` btth01_cse485`   
` btth01_cse485`CREATE VIEW vw_Music AS
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, tacgia.ten_tgia, theloai.ten_tloai
FROM baiviet
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai;   



DELIMITER //

---Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách Bài viết của thể loại đó:   



CREATE PROCEDURE sp_DSBaiViet(IN p_ten_the_loai VARCHAR(50))
BEGIN
    SELECT *
    FROM baiviet
    INNER JOIN theloai 
    ON baiviet.ma_tloai = theloai.ma_tloai
    WHERE theloai.ten_tloai = p_ten_the_loai
END 
DELIMITER ;

--- Thêm một cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo:` btth01_cse485`
ALTER TABLE theloai ADD COLUMN SLBaiViet INT DEFAULT 0;

DELIMITER $$
CREATE TRIGGER tg_CapNhatTheLoai AFTER INSERT ON baiviet
FOR EACH ROW
BEGIN
  UPDATE theloai SET SLBaiViet = SLBaiViet + 1 WHERE ma_tloai = NEW.ma_tloai;
END $$
DELIMITER ;


---Bổ sung thêm bảng Users để lưu thông tin tài khoản đăng nhập và sử dụng cho chức năng Đăng nhập/Quản trị trang web
CREATE TABLE Users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);
` btth01_cse485`nhap