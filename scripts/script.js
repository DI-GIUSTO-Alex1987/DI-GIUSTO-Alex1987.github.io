/**
 * Animation texte page home
 * */

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slidetext");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}

/**
 * Fade au scroll + changement de couleur de la nav
 * */

const scroll_home = document.querySelector(".scroll-section-home");
const scroll_apropos = document.querySelector(".scroll-section-apropos");
const scroll_presta = document.querySelector(".scroll-section-presta");
const scroll_portfolio = document.querySelector(".scroll-section-portfolio");
const scroll_blog = document.querySelector(".scroll-section-blog");
const scroll_contact = document.querySelector(".scroll-section-contact");
const pos_block_social = document.querySelector(".pos-block-social");



if (screen.width >= 1920 && screen.height >= 1080) {
  window.addEventListener("scroll", () => {
    //console.log('scroll !')

    // Page home
    if (window.scrollY >= 0 && window.scrollY < 460) {
      scroll_home.classList.add("active");
      scroll_apropos.classList.remove("active");
    }

    // Page a propos
    if (window.scrollY >= 460 && window.scrollY < 3580) {
      scroll_home.classList.remove("active");
      scroll_apropos.classList.add("active");
      scroll_presta.classList.remove("active");
    }

     // Page a propos - social link
    if (window.scrollY >= 650 && window.scrollY < 3580) {
      pos_block_social.classList.add("active");
    }else{
        pos_block_social.classList.remove("active");
      }

    // Page prestations
    if (window.scrollY >= 3580 && window.scrollY < 7100) {
      scroll_apropos.classList.remove("active");
      scroll_presta.classList.add("active");
      scroll_portfolio.classList.remove("active");
    }

    // Page Portfolio
    if (window.scrollY >= 7100 && window.scrollY < 8000) {
      scroll_presta.classList.remove("active");
      scroll_portfolio.classList.add("active");
      scroll_blog.classList.remove("active");
    }

    // Page Blog
    if (window.scrollY >= 8000 && window.scrollY < 9000) {
      scroll_portfolio.classList.remove("active");
      scroll_blog.classList.add("active");
      scroll_contact.classList.remove("active");
    }

    // Page contact
    if (window.scrollY >= 9000) {
      scroll_blog.classList.remove("active");
      scroll_contact.classList.add("active");
    }
  });


} else {
  window.addEventListener("scroll", () => {
    //console.log('scroll !')

    // Page home
    if (window.scrollY >= 0 && window.scrollY < 460) {
      scroll_home.classList.add("active");
      scroll_apropos.classList.remove("active");
    }

    // Page a propos
    if (window.scrollY >= 460 && window.scrollY < 3580) {
      scroll_home.classList.remove("active");
      scroll_apropos.classList.add("active");
      scroll_presta.classList.remove("active");
    }

    // Page a propos - social link
    if (window.scrollY >= 650 && window.scrollY < 3400) {
      pos_block_social.classList.add("active");
    }else{
      pos_block_social.classList.remove("active");
    }


    // Page prestations
    if (window.scrollY >= 3580 && window.scrollY < 6550) {
      scroll_apropos.classList.remove("active");
      scroll_presta.classList.add("active");
      scroll_portfolio.classList.remove("active");
    }

    // Page Portfolio
    if (window.scrollY >= 6550 && window.scrollY < 7700) {
      scroll_presta.classList.remove("active");
      scroll_portfolio.classList.add("active");
      scroll_blog.classList.remove("active");
    }

    // Page Blog
    if (window.scrollY >= 7700 && window.scrollY < 8450) {
      scroll_portfolio.classList.remove("active");
      scroll_blog.classList.add("active");
      scroll_contact.classList.remove("active");
    }

    // Page contact
    if (window.scrollY >= 8450) {
      scroll_blog.classList.remove("active");
      scroll_contact.classList.add("active");
    }
  });
}

/**
 * Apparition des articles
 * */

const paginationNumbers = document.getElementById("pagination-numbers");
const paginatedList = document.getElementById("paginated-list");
const listItems = paginatedList.querySelectorAll("article");
const nextButton = document.getElementById("next-button");
const prevButton = document.getElementById("prev-button");

const paginationLimit = 1;
const pageCount = Math.ceil(listItems.length / paginationLimit);
let currentPage = 1;

const disableButton = button => {
  button.classList.add("disabled");
  button.setAttribute("disabled", true);
};

const enableButton = button => {
  button.classList.remove("disabled");
  button.removeAttribute("disabled");
};

const handlePageButtonsStatus = () => {
  if (currentPage === 1) {
    disableButton(prevButton);
  } else {
    enableButton(prevButton);
  }

  if (pageCount === currentPage) {
    disableButton(nextButton);
  } else {
    enableButton(nextButton);
  }
};

const handleActivePageNumber = () => {
  document.querySelectorAll(".pagination-number").forEach(button => {
    button.classList.remove("active");
    const pageIndex = Number(button.getAttribute("page-index"));
    if (pageIndex == currentPage) {
      button.classList.add("active");
    }
  });
};

const appendPageNumber = index => {
  const pageNumber = document.createElement("button");
  pageNumber.className = "pagination-number";
  pageNumber.innerHTML = index;
  pageNumber.setAttribute("page-index", index);
  pageNumber.setAttribute("aria-label", "Page " + index);
  pageNumber.setAttribute("id", "article" + index);
  pageNumber.setAttribute("onclick", "btn" + index + "()");

  paginationNumbers.appendChild(pageNumber);
};

const getPaginationNumbers = () => {
  for (let i = 1; i <= pageCount; i++) {
    appendPageNumber(i);
  }
};

const setCurrentPage = pageNum => {
  currentPage = pageNum;

  handleActivePageNumber();
  handlePageButtonsStatus();

  const prevRange = (pageNum - 1) * paginationLimit;
  const currRange = pageNum * paginationLimit;

  listItems.forEach((item, index) => {
    item.classList.add("hidden");
    if (index >= prevRange && index < currRange) {
      item.classList.remove("hidden");
    }
  });
};

window.addEventListener("load", () => {
  getPaginationNumbers();
  setCurrentPage(1);

  prevButton.addEventListener("click", () => {
    setCurrentPage(currentPage - 1);
  });

  nextButton.addEventListener("click", () => {
    setCurrentPage(currentPage + 1);
  });

  document.querySelectorAll(".pagination-number").forEach(button => {
    const pageIndex = Number(button.getAttribute("page-index"));

    if (pageIndex) {
      button.addEventListener("click", () => {
        setCurrentPage(pageIndex);
      });
    }
  });
});

/**
 * Apparition des articles / changement de couleur titre des articles
 * */

function btn1() {
  document.getElementById("titleart1").style.color = "#dfdd00";
  document.getElementById("titleart2").style.color = "whitesmoke";
  document.getElementById("titleart3").style.color = "whitesmoke";
}

function btn2() {
  document.getElementById("titleart2").style.color = "#dfdd00";
  document.getElementById("titleart1").style.color = "whitesmoke";
  document.getElementById("titleart3").style.color = "whitesmoke";
}

function btn3() {
  document.getElementById("titleart3").style.color = "#dfdd00";
  document.getElementById("titleart1").style.color = "whitesmoke";
  document.getElementById("titleart2").style.color = "whitesmoke";
}
