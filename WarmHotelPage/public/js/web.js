var hamburger = document.querySelector(".hamburger");
var closebtn = document.querySelector(".closebtn");
var sidenav = document.getElementById("mySidenav");

hamburger.addEventListener("click", function () {
    sidenav.style.width = "250px";
});

closebtn.addEventListener("click", function () {
    sidenav.style.width = "0";
});


const roomsBurger = document.querySelector(".rooms-burger");
const roomsBurgerMenu = document.querySelector(".rooms-burger-menu");
const servservicesBurger = document.querySelector(".services-burger");
const contactBurger = document.querySelector(".contact-burger");
const arrowLeft = document.querySelector(".left");

var roomsMenuBoolean = true;
roomsBurger.addEventListener("click", function () {
    if(roomsMenuBoolean){
        roomsBurgerMenu.style.display = "block";
        servservicesBurger.style.display = "none";
        contactBurger.style.display = "none";
        arrowLeft.style.transform = "rotate(45deg)";

        roomsMenuBoolean = false;
    }else{
        roomsBurgerMenu.style.display = "none";
        servservicesBurger.style.display = "block";
        contactBurger.style.display = "block";
        arrowLeft.style.transform = "rotate(135deg)";

        roomsMenuBoolean = true;
    }

})






//Calendar
const header = document.querySelector(".calendar h3");
const dates = document.querySelector(".dates");
const navs = document.querySelectorAll("#prev,#next");

const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
];

let date = new Date();
let month = date.getMonth();
let year = date.getFullYear();

function setupDayClickListeners() {
    const allDays = document.querySelectorAll(".dates li");
    allDays.forEach((day) => {
        day.addEventListener("click", function () {
            let clickedDay = parseInt(day.textContent);
            if (clickedDay < 10) {
                clickedDay = `0${clickedDay}`;
            }

            let month1 = month + 1;
            if (month1 < 10) {
                month1 = `0${month1}`;
            }
            const clickedMonth = month1;
            const clickedYear = year;

            if (checkButton1.classList.contains("active")) {
                // Check-in selected
                const checkInField = document.querySelector(
                    ".check-left1 p:first-child"
                );
                checkInField.textContent = `${clickedDay}/${clickedMonth}/${clickedYear}`;
                checkInField.style.fontSize = "17px";
            } else if (checkButton2.classList.contains("active")) {
                // Check-out selected
                const checkOutField = document.querySelector(
                    ".check-left2 p:first-child"
                );
                checkOutField.textContent = `${clickedDay}/${clickedMonth}/${clickedYear}`;
                checkOutField.style.fontSize = "17px";
            }

            // Close the calendar window
            bookingNow.style.marginTop = "600px";
            checkCalendarContent.style.display = "none";
            checkCalendar.style.marginTop = "0";
            isWindowOpen = false;
        });
    });
}

setupDayClickListeners();

function renderCalendar() {
    const start = new Date(year, month, 1).getDay();
    const endDate = new Date(year, month + 1, 0).getDate();
    const end = new Date(year, month, endDate).getDay();
    const endDatePrev = new Date(year, month, 0).getDate();

    let datesHtml = "";

    for (let i = start; i > 0; i--) {
        datesHtml += `<li class="inactive">${endDatePrev - i + 1}</li>`;
    }

    for (let i = 1; i <= endDate; i++) {
        let className =
            i === date.getDate() &&
            month === new Date().getMonth() &&
            year === new Date().getFullYear()
                ? ' class = "today"'
                : "";

        datesHtml += `<li ${className} class="active">${i}</li>`;
    }

    for (let i = end; i < 6; i++) {
        datesHtml += `<li class="inactive">${i - end + 1}</li>`;
    }

    dates.innerHTML = datesHtml;
    header.textContent = `${months[month]} ${year}`;

    setupDayClickListeners();
}

navs.forEach((nav) => {
    nav.addEventListener("click", (e) => {
        const btnId = e.target.id;

        if (btnId === "prev" && month === 0) {
            year--;
            month = 11;
        } else if (btnId === "next" && month === 11) {
            year++;
            month = 0;
        } else {
            month = btnId === "next" ? month + 1 : month - 1;
        }

        date = new Date(year, month, new Date().getDate());
        year = date.getFullYear();
        month = date.getMonth();

        renderCalendar();
    });
});

renderCalendar();

const checkButton1 = document.querySelector(".check-button1");
const checkButton2 = document.querySelector(".check-button2");
const bookingNow = document.querySelector(".booking-now");
const checkCalendarContent = document.querySelector(".check-calendar-content");
const checkCalendar = document.querySelector(".check-calendar");

let isWindowOpen = false;

checkButton1.addEventListener("click", toggleWindow);
checkButton2.addEventListener("click", toggleWindow);

function toggleWindow() {
    if (isWindowOpen) {
        closeWindow();
    } else {
        openWindow();
    }
}

function openWindow() {
    bookingNow.style.marginTop = "0";
    checkCalendarContent.style.display = "block";
    checkCalendar.style.marginTop = "196px";
    isWindowOpen = true;
    document.addEventListener("click", closeWindowOnClick);
}

function closeWindow() {
    bookingNow.style.marginTop = "600px";
    checkCalendarContent.style.display = "none";
    checkCalendar.style.marginTop = "0";
    isWindowOpen = false;
    document.removeEventListener("click", closeWindowOnClick);
}

function closeWindowOnClick(event) {
    if (
        !checkButton1.contains(event.target) &&
        !checkButton2.contains(event.target) &&
        !navs[0].contains(event.target) &&
        !navs[1].contains(event.target)
    ) {
        closeWindow();
    }
}

const activeDays = document.querySelectorAll(".dates .active");

let isCheckInActive = false;

checkButton1.addEventListener("click", function () {
    if (!isCheckInActive) {
        checkButton1.classList.add("active");
        checkButton2.classList.remove("active");
        isCheckInActive = true;
    }
});

checkButton2.addEventListener("click", function () {
    if (isCheckInActive) {
        checkButton1.classList.remove("active");
        checkButton2.classList.add("active");
        isCheckInActive = false;
    }
});

//End Calendar

//Persons Count

const minusAdults = document.querySelector(".minus-adults");
const plusAdults = document.querySelector(".plus-adults");
const minusChildren = document.querySelector(".minus-children");
const plusChildren = document.querySelector(".plus-children");

minusAdults.addEventListener("click", function () {
    const adultsCountInput = document.querySelector(".adults-count");
    let count = parseInt(adultsCountInput.value);
    if (count > 1) {
        count--;
        adultsCountInput.value = count;
    }
});

plusAdults.addEventListener("click", function () {
    const adultsCountInput = document.querySelector(".adults-count");
    let count = parseInt(adultsCountInput.value);
    count++;
    adultsCountInput.value = count;
});

minusChildren.addEventListener("click", function () {
    const childrenCountInput = document.querySelector(".children-count");
    let count = parseInt(childrenCountInput.value);
    if (count > 0) {
        count--;
        childrenCountInput.value = count;
    }
});

plusChildren.addEventListener("click", function () {
    const childrenCountInput = document.querySelector(".children-count");
    let count = parseInt(childrenCountInput.value);
    count++;
    childrenCountInput.value = count;
});

const personsCount = document.querySelector(".persons-count");
const personsButton = document.getElementById("persons-button");
const doneButton = document.querySelector(".done-button");

doneButton.addEventListener("click", function () {
    closePersonsWindow();
});

isPersonsOpen = false;

// Event listener for personsButton button
personsButton.addEventListener("click", function (event) {
    event.stopPropagation();

    if (!isPersonsOpen) {
        openPersonsWindow();
    } else {
        closePersonsWindow();
    }
});

// Function to open the persons window
function openPersonsWindow() {
    personsCount.style.display = "block";
    personsCount.style.marginTop = "196px";
    bookingNow.style.marginTop = "0px";
    isPersonsOpen = true;

    document.addEventListener("click", closePersonsWindowOnClick);
}

// Function to close the persons window
function closePersonsWindow() {
    personsCount.style.display = "none";
    personsCount.style.marginTop = "0px";
    bookingNow.style.marginTop = "600px";
    isPersonsOpen = false;

    document.removeEventListener("click", closePersonsWindowOnClick);
}

// Function to close the window when clicking outside
function closePersonsWindowOnClick(event) {
    if (
        !personsCount.contains(event.target) &&
        event.target !== personsButton
    ) {
        closePersonsWindow();
    }
}

//֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊֊

const checkBookButton = $(".check-book-button");
$("#userModal").hide();

checkBookButton.on("click", function () {
    let dateFrom = $("#date-from").html(),
        dateTo = $("#date-to").html(),
        adultsCount = $(".adults-count").val(),
        childrenCount = $(".children-count").val(),
        rooms = $("#rooms").val();

    $.ajax({
        type: "POST",
        url: url,
        data: {
            _token: token,
            dateFrom: dateFrom,
            dateTo: dateTo,
            adultsCount: adultsCount,
            childrenCount: childrenCount,
            room: rooms,
        },
        success: function (response) {
            $("#userModal").show();
            const hiddenInput = $(
                '<input type="hidden" name="order_id" value="' +
                    response.data.order_id +
                    '">'
            );
            $("#userForm").append(hiddenInput);
        },
        error: function (response) {
            if (response.status == 403) {
                $("#errorModal").show();
            }
        },
    });
});

$("#userSubmitBtn").on("click", function () {
    $.ajax({
        type: "POST",
        url: userUrl,
        data: $("#userForm").serialize(),
        success: function () {
            $("#userModal").hide();
        },
    });
});

$("#userCloseBtn").on("click", function () {
    $("#userModal").hide();
});

$("#errorModal").hide();

$("#errorCloseBtn").on("click", function () {
    $("#errorModal").hide();
});
