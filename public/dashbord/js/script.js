$(document).ready(function () {
    //Get Single User
    function getusersrow(user) {
        //console.log(user);
        var userData = "";
        userData += `<tr>
                        <th scope="row"><img src="uploads/${user.course_img}" width="100px" height="100px"></th>
                        <td>${user.category}</td>
                        <td>${user.unique_id}</td>
                        <td>${user.course_name}</td>
                        <td>${user.course_front_des}</td>
                        <td>${user.course_point_det_1}</td>
                        <td>${user.course_point_det_2}</td>
                        <td>${user.course_point_det_3}</td>
                        <td>${user.course_back_des}</td>
                        <td>${user.course_fees}</td>
                        <td>${user.course_cer_des}</td>
                        <td>${user.why_learn_1}</td>
                        <td>${user.why_learn_2}</td>
                        <td>${user.why_learn_3}</td>
                        <td>${user.why_learn_4}</td>
                        <td>${user.why_learn_5}</td>
                        <td>${user.why_learn_6}</td>
                        <td>${user.faq_ans_1}</td>
                        <td>${user.faq_ans_2}</td>
                        <td>${user.faq_ans_3}</td>
                        <td>${user.faq_ans_4}</td>
                        <td>${user.faq_ans_5}</td>
                        <td>${user.faq_ans_6}</td>
                        <td>
                        <a href="#" class="me-3 profile" data-bs-toggle="modal" data-bs-target="#userViewModal" title=" View Profile" data-id="${user.id}"><i class="fas fa-eye text-success"></i></a>
                        <a href="#" class="me-3 edituser" title=" Edit" data-bs-toggle="modal" data-bs-target="#add-edit-modal" data-id="${user.id}"><i class="fas fa-edit text-info"></i></a>
                        <a href="#" class="me-3 deleteuser" title=" Delete" data-id="${user.id}"><i class="fas fa-trash-alt text-danger"></i></a>
                        </td>
                    </tr>`;
        return userData;
    }


    //new section start here

    function getuserscourse(course) {
        console.log(course);
        var courseData = "";
        courseData += `<div class="course-main-section-card md:col-span-6 lg:col-span-4">
        <div class="single-card bg-white rounded-xl shadow-xl overflow-hidden">
            <img src="../public/dashbord/uploads/${course.course_img}" alt="" srcset="" class="rounded-t-xl md:w-full md:h-[250px] hover:scale-110 transition-all duration-500 ease-out">
            <div class="single-card-text px-3">
                <h2 class="text-xl font-semibold pt-5 pb-2">${course.course_name}</h2>
                <p class="pb-5 text-gray-600">${course.course_front_des}</p>
                <ol class="list-disc px-5 pb-5 text-gray-600">
                    <li>${course.course_point_det_1}</li>
                    <li>${course.course_point_det_2}</li>
                    <li>${course.course_point_det_3}</li>
                    
                </ol>
                <a href="../public/learn_more.php?category=${course.category}" class="text-blue-600 ">Learn More <i class="fa-solid fa-arrow-right pb-10"></i></a>
            </div>
        </div>
    </div>`;
        return courseData;
    }



    //new section end here


    //Get All User
    function getUsers() {
        $.ajax({
            url: '/All_Project/Course_Selling_Institute/public/dashbord/ajax.php',
            method: 'get',
            dataType: 'json',
            data: { action: "getallusers" },
            success: function (row) {
                //console.log(row);
                var userList = "";
                var onlinecourseList = "";
                var offlinecourseList = "";
                var selfcourseList = "";
                $.each(row.players, function (index, user) {
                    userList += getusersrow(user);
                    if (user.category == "online") {
                        onlinecourseList += getuserscourse(user);
                    }
                    else if (user.category == "offline") {
                        offlinecourseList += getuserscourse(user);
                    }
                    else if (user.category == "self") {
                        selfcourseList += getuserscourse(user);
                    }

                });
                $("#usertable tbody").html(userList);
                $("#onlinesection").append(onlinecourseList);
                $("#offlinesection").append(offlinecourseList);
                $("#selfsection").append(selfcourseList);
            },
        });
    }
    // Adding Users
    $(document).on('submit', '#addform', function (e) {
        e.preventDefault();
        $.ajax({
            url: '/All_Project/Course_Selling_Institute/public/dashbord/ajax.php',
            method: "post",
            dataType: "json",
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend: function () {
                console.log("Wait .......")
            },
            success: function (response) {
                //console.log(response);
                if (response) {
                    $("#add-edit-modal").modal("hide");
                    $("#addform")[0].reset();
                    getUsers();
                }
            },
            error: function (request, error) {
                console.log(arguments);
                console.log("Error:" + error);
            }
        });
    });



    $("#livesearch").keyup(function () {
        var input = $(this).val();
        //alert(input);
        //if(input != ""){
        $.ajax({
            url: "/All_Project/Course_Selling_Institute/public/dashbord/livesearch.php",
            method: "post",
            data: { input: input },
            success: function (data) {
                $("#usertable").html(data);
            },
            error: function (request, error) {
                console.log(arguments);
                console.log("Error:" + error);
            },
        });
        //}
    });



    $(document).on('submit', '#demoform', function (e) {
        //e.preventDefault();
        console.log("clicked");
        $.ajax({
            url: '/All_Project/Course_Selling_Institute/public/dashbord/ajax.php',
            method: "post",
            dataType: "json",
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend: function () {
                console.log("Wait .......")
            },
            success: function (response) {
                console.log(response);
                if (response) {
                    //$("#add-edit-modal").modal("hide");
                    console.log("success");
                    $("#demoform")[0].reset();
                    //getUsers();
                }
            },
            error: function (request, error) {
                console.log(arguments);
                console.log("Error:" + error);
            }
        });
    });




    //Profile DAta
    $(document).on('click', 'a.profile', function () {
        var uid = $(this).data('id');
        $.ajax({
            url: '/All_Project/Course_Selling_Institute/public/dashbord/ajax.php',
            method: 'get',
            dataType: 'json',
            data: { id: uid, action: "userData" },
            success: function (row) {
                // console.log(row);
                var user = `
                            <div class="card">
                            <img src="uploads/${row.photo}" alt="John" style="width:120px;height:80px;">
                            <p>${row.name}</p>
                            <h1>${row.email}</h1>
                            <p>${row.mobile}</p>
                            </div>`;
                $('#profile').html(user);
            }
        });
    });
    //Onclick event for editing
    $(document).on("click", "a.edituser", function () {
        var uid = $(this).data("id");
        // Ajax
        $.ajax({
            url: '/All_Project/Course_Selling_Institute/public/dashbord/ajax.php',
            type: "GET",
            dataType: "json",
            data: { id: uid, action: "editusersdata" },
            cache: false,
            success: function (rows) {
                console.log(rows);
                if (rows) {
                    $("#username").val(rows[1]);
                    $("#email").val(rows[2]);
                    $("#mobile").val(rows[3]);
                    $("#userId").val(rows[0]);
                }
            }
        });
    });
    //Page Load All User
    getUsers();
    //getcourse();
});