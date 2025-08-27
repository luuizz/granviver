var acc = document.querySelectorAll(".accordion");

if (acc.length > 0) {
  for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      const desc = this.nextElementSibling;
      const allDesc = document.querySelectorAll(".desc");
      const activeAcc = document.getElementsByClassName("accordion active");

      if (desc && desc.style.maxHeight) {
        desc.style.maxHeight = null;
        this.classList.remove("active");
      } else {
        for (let i = 0; i < activeAcc.length; i++) {
          activeAcc[i].classList.remove("active");
      }

        for (let i = 0; i < allDesc.length; i++) {
          allDesc[i].style.maxHeight = null;
        }

        if (desc) {
          desc.style.maxHeight = desc.scrollHeight + "px";
        }

        this.classList.add("active");
    }
  });
  }
}
