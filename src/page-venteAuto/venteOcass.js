document.addEventListener('DOMContentLoaded', function() {
    let imgAuto = document.querySelectorAll('div.wrapper-auto > .contain-auto >.auto> .img-container');
    imgAuto.forEach((element) => {
        let children = element.children;
        element.addEventListener('mouseover', () => {
            element.style.cursor = 'pointer';
            let backgroundElement = element.querySelector('.img-auto');
            backgroundElement.style.filter = 'brightness(80%)'
            backgroundElement.style.filter = 'blur(1px)'
            children[1].style.display ="block";
            children[2].style.display ="block";
            children[3].style.display ="block";
        });
        element.addEventListener('mouseout', () => {
            let children = element.children;
            let backgroundElement = element.querySelector('.img-auto');
            backgroundElement.style.filter = 'brightness(1)'
            backgroundElement.style.filter = 'blur(0px)'
            element.style.filter = 'none';
            children[1].style.display ="none";
            children[2].style.display ="none"; // Réinitialiser la propriété filter
            children[3].style.display ="none"; // Réinitialiser la propriété filter
        });
    });
});

