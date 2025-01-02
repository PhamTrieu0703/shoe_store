# Website-selling-shoes
# Website Quản Lý Cửa Hàng

## Mô tả
Dự án này là một hệ thống website giúp cho chủ cửa hàng quản lý các mặt hàng trong cửa hàng một cách tiện lợi và hiệu quả. Website cung cấp nhiều tính năng để chủ cửa hàng cập nhật, lưu trữ, và kiểm tra thông tin sản phẩm, đơn hàng, và các bài viết liên quan. Đồng thời, khách hàng có thể đăng ký tài khoản, tìm kiếm sản phẩm và đánh giá sản phẩm trên website.

## Các Tính Năng Chính
1. **Trang chủ**: 
   - Tóm tắt nội dung website bao gồm các bài viết, video quảng cáo và các sản phẩm nổi bật.

2. **Quản lý tài khoản người dùng**: 
   - Đăng ký, đăng nhập và quản lý thông tin tài khoản của người dùng.

3. **Trang sản phẩm**: 
   - Hiển thị danh sách các sản phẩm hiện có trong cửa hàng.
   - Tìm kiếm và lọc sản phẩm dựa trên các tiêu chí như loại sản phẩm, giá cả.

4. **Thông tin sản phẩm**: 
   - Hiển thị thông tin chi tiết của từng sản phẩm bao gồm mô tả, giá cả, và đánh giá.

5. **Giỏ hàng và thanh toán**: 
   - Cho phép người dùng thêm sản phẩm vào giỏ hàng và tiến hành thanh toán.
   - Kiểm tra tồn kho để đảm bảo các sản phẩm còn sẵn hàng.

6. **Quản lý tồn kho**: 
   - Chỉ dành cho Admin. Theo dõi số lượng sản phẩm hiện có, cập nhật thông tin kho hàng.

7. **Quản lý đơn hàng**: 
   - Tiếp nhận đơn hàng từ khách hàng, lên lịch giao hàng và xác nhận thời điểm, địa điểm giao hàng.

8. **Quản lý bài viết**: 
   - Cập nhật và chỉnh sửa các bài viết về sản phẩm và các chủ đề khác trên website.

## Phân Quyền Người Dùng
- **Admin**: Có quyền truy cập vào các chức năng quản trị như quản lý tài khoản thành viên, quản lý danh mục sản phẩm, tồn kho và đơn hàng.
- **User**: Người dùng sau khi đăng nhập có thể xem và đặt hàng các sản phẩm, đăng ký tài khoản, và tham gia bình luận, đánh giá về sản phẩm.

## Cấu Trúc Website
- **Trang chủ**: Tóm tắt toàn bộ website với các liên kết đến các trang chủ đề khác.
- **Tài Khoản**: Trang thông tin cá nhân của người dùng, cho phép cập nhật thông tin và quản lý đơn hàng cá nhân.
- **Đăng Ký**: Trang đăng ký tài khoản mới cho khách hàng.
- **Sản Phẩm**: Hiển thị danh sách sản phẩm, với bộ lọc và tìm kiếm.
- **Giỏ Hàng và Thanh Toán**: Quản lý giỏ hàng và tiến hành các bước thanh toán.
- **Quản lý thành viên**: Chỉ dành cho Admin để quản lý các thông tin thành viên trên website.

## Công Nghệ Sử Dụng
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Cài Đặt
1. Clone repository về máy:
   ```bash
   git clone https://github.com/username/ten-du-an.git
