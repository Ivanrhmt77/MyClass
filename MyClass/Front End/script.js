document.addEventListener("DOMContentLoaded", function () {
  var navhead = document.getElementById("navscroll");
  var navItems = document.querySelectorAll(".navlist");

  window.addEventListener("scroll", function () {
    var scrollPosition = window.scrollY;

    if (scrollPosition > 100) {
      navhead.style.transition = "background-color 0.2s ease";
      navhead.style.backgroundColor = "#ffffff";
      navhead.style.boxShadow = "0px 4px 4px 0px rgba(0, 0, 0, 0.25)";

      navItems.forEach(function (item) {
        item.style.transition = "color 0.2s ease";
        item.style.color = "#000000";
      });
    } else {
      navhead.style.transition = "background-color 0.5s ease";
      navhead.style.backgroundColor = "transparent";
      navhead.style.boxShadow = "none";

      navItems.forEach(function (item) {
        item.style.transition = "color 0.2s ease";
        item.style.color = "#ffffff";
      });
    }
  });

  navItems.forEach(function (item) {
    item.addEventListener("mouseover", function () {
      item.style.color = "#7878f4";
    });

    item.addEventListener("mouseout", function () {
      var scrollPosition = window.scrollY;
      if (scrollPosition > 100) {
        item.style.color = "#000000";
      } else {
        item.style.color = "#ffffff";
      }
    });
  });

  document.querySelectorAll(".navlist").forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const href = this.getAttribute("href");
      const offsetTop = document.querySelector(href).offsetTop;
      scroll({
        top: offsetTop,
        behavior: "smooth",
      });
    });
  });
});

const insertText = document.querySelector(".title-text .insert");
const insertForm = document.querySelector("form.insert");
const insertBtn = document.querySelector("label.insert");
const updateBtn = document.querySelector("label.update");
const deleteBtn = document.querySelector("label.delete");
updateBtn.onclick = () => {
  insertForm.style.marginLeft = "-1185px";
  insertText.style.marginLeft = "-1185px";
};
deleteBtn.onclick = () => {
  insertForm.style.marginLeft = "-2370px";
  insertText.style.marginLeft = "-2370px";
};
insertBtn.onclick = () => {
  insertForm.style.marginLeft = "0%";
  insertText.style.marginLeft = "0%";
};

document.addEventListener("DOMContentLoaded", function () {
  var inputs = document.querySelectorAll("input, textarea");
  inputs.forEach(function (input) {
    var currentPlaceholder = input.placeholder;

    input.addEventListener("focus", function () {
      input.placeholder = "";
    });

    input.addEventListener("blur", function () {
      if (input.value === "") {
        input.placeholder = currentPlaceholder;
      }
    });
  });
});

document
  .getElementById("insertForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const formData = new FormData(this);
    fetch("../Back End/insert.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        showNotification(data.status, data.message);
      })
      .catch((error) => {
        showNotification("error", "NRP sudah ada, Data gagal ditambahkan");
      });
  });

document.addEventListener("DOMContentLoaded", function () {
  var inputs = document.querySelectorAll("input, textarea");
  inputs.forEach(function (input) {
    var currentPlaceholder = input.placeholder;

    input.addEventListener("focus", function () {
      input.placeholder = "";
    });

    input.addEventListener("blur", function () {
      if (input.value === "") {
        input.placeholder = currentPlaceholder;
      }
    });
  });
});

document
  .getElementById("updateForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const formData = new FormData(this);
    fetch("../Back End/update.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        showNotification(data.status, data.message);
      })
      .catch((error) => {
        showNotification("error", "Data gagal diubah");
      });
  });

document
  .getElementById("deleteForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const formData = new FormData(this);
    fetch("../Back End/delete.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        showNotification(data.status, data.message);
      })
      .catch((error) => {
        showNotification("error", "NRP tidak ditemukan, Data gagal dihapus");
      });
  });

function showNotification(status, message) {
  const responseDiv = document.getElementById("response");
  responseDiv.textContent = message;
  responseDiv.style.display = "block";
  responseDiv.style.padding = "10px";
  responseDiv.style.color = "#ffffff";
  responseDiv.style.margin = "10px 0";
  responseDiv.style.borderRadius = "5px";
  if (status === "success") {
    responseDiv.style.backgroundColor = "#4CAF50";
  } else {
    responseDiv.style.backgroundColor = "#f44336";
  }

  setTimeout(() => {
    responseDiv.style.display = "none";
  }, 4000);
}

document.addEventListener("DOMContentLoaded", function () {
  const initialRows = Array.from(document.querySelectorAll("#read tbody tr"));

  function filterAndSortTable() {
    const jurusanValue = document.getElementById("sorterJurusan").value;
    const semesterValue = document.getElementById("sorterSemester").value;
    const kelasValue = document.getElementById("sorterKelas").value;

    const filteredRows = initialRows.filter((row) => {
      const jurusan = row.cells[4].innerText.trim();
      const semester = row.cells[5].innerText.trim();
      const kelas = row.cells[6].innerText.trim();

      return (
        (jurusanValue === "semua" || jurusan === jurusanValue) &&
        (semesterValue === "semua" || semester === semesterValue) &&
        (kelasValue === "semua" || kelas === kelasValue)
      );
    });

    const tbody = document.querySelector("#read tbody");
    tbody.innerHTML = "";

    let counter = 1;
    filteredRows.forEach((row) => {
      const clonedRow = row.cloneNode(true);
      clonedRow.cells[0].textContent = counter++;
      tbody.appendChild(clonedRow);
    });
  }

  document.querySelector("#read tbody").addEventListener("click", function (e) {
    if (e.target && e.target.matches("a.popup")) {
      e.preventDefault();
      var url = e.target.getAttribute("href");

      $.get(url, function (data) {
        $("#popup").html(data).append('<button class="close-popup">X</button>');
        $("#popup").show();
        $("#darkBackground").show();
      });
      $(document).on("click", ".close-popup", function () {
        $("#popup").hide();
        $("#darkBackground").hide();
      });
    }
  });

  document
    .getElementById("sorterJurusan")
    .addEventListener("change", filterAndSortTable);
  document
    .getElementById("sorterSemester")
    .addEventListener("change", filterAndSortTable);
  document
    .getElementById("sorterKelas")
    .addEventListener("change", filterAndSortTable);

  filterAndSortTable();
});
