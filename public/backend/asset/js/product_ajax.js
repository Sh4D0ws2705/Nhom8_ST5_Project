/* Token này sẽ được máy chủ
 kiểm tra để đảm bảo rằng yêu cầu đó là hợp lệ và không phải là một phần của tấn công CSRF*/
$.ajaxSetup({
    headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
});

/**xử lý sự kiện khi người dùng chọn một tệp tin từ một phần tử input có id là "file" */
//Sự kiện này sẽ được kích hoạt khi người dùng chọn một file.

$("#file").on("change", () => {
    // Khi người dùng chọn một file
    var formData = new FormData(); // Tạo một đối tượng FormData để chứa dữ liệu
    var file = $("#file")[0].files[0]; // Lấy ra file đã chọn
    formData.append("file", file); // Thêm file vào FormData
    $.ajax({
        url: "/upload", // Gửi yêu cầu đến địa chỉ /upload
        processData: false, // Không xử lý dữ liệu trước khi gửi yêu cầu
        dataType: "json", // Mong đợi dữ liệu trả về là JSON
        data: formData, // Dữ liệu gửi đi là FormData
        method: "POST", // Sử dụng phương thức POST
        contentType: false, // Không thiết lập loại dữ liệu gửi đi
        success: function (result) {
            // Xử lý kết quả trả về từ máy chủ
            if (result.success == true) {
                // Nếu yêu cầu thành công
                html = ""; // Tạo biến để hiển thị hình ảnh
                html += '<img src="' + result.path + '" alt="">'; // Tạo thẻ img để hiển thị hình ảnh
                $("#input-file-img").html(html); // Hiển thị hình ảnh trên giao diện
                $("#input-file-img-hiden").val(result.path); // Lưu đường dẫn hình ảnh vào một input ẩn
            }
        },
    });
});
