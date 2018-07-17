(function () {  
    var navMenu = document.getElementsByClassName( 'nav-menu' )[0],
        galleryWrapper = document.getElementsByClassName( 'gallery-wrapper' )[0],
        imageWrappers = galleryWrapper.getElementsByClassName( 'image-wrapper' ),
        imageHolders = galleryWrapper.getElementsByClassName( 'image-holder' ),
        lightbox = document.getElementsByClassName( 'lightbox' )[0],
        lightboxCloseBtn = lightbox.getElementsByClassName( 'lightbox-close' )[0],
        defaultCategory = 'all',
        menuButtons = navMenu.getElementsByTagName( 'button' );
    // I was going to add Categories and Items dynamically, but since it was not stated in TS
    // it was not clear if that's what you expected. That's why I have all categories and items
    // added in HTML manually.

    //Filters functionality
    for ( var i = 0; i < menuButtons.length; i++ ) {
        let currentButton = menuButtons[i];
        currentButton.addEventListener( 'click', function() {
            //Using dataset in order to get active category
            var activeButton = document.getElementsByClassName( 'active-button' )[0];
            var activeCategory = activeButton.dataset.category;
            var self = this;
            var currentCategory = self.dataset.category;
            if(currentCategory == activeCategory) {
                return;
            }
            else if ( currentCategory == 'all' ) {
                galleryWrapper.style.opacity = 0;
                activeButton.classList.remove( 'active-button' );
                self.classList.add( 'active-button' );
                setTimeout( function() {
                    displayAll();
					galleryWrapper.style.opacity = 1;
				}, 300);
            } 
            else {
                galleryWrapper.style.opacity = 0;
                activeButton.classList.remove( 'active-button' );
                self.classList.add( 'active-button' );
                setTimeout( function() {
                    displayAll();
					hideItems( currentCategory );
					galleryWrapper.style.opacity = 1;
				}, 300);
            }
        })
    }

    for ( var i = 0; i < imageHolders.length; i++ ) {
        let currentImage = imageHolders[i];
        //function that is in charge of displaying Lightbox, once clicked on any item in Porfolio
        currentImage.addEventListener( 'click', function() {
            var lightboxImage = lightbox.getElementsByTagName( 'img' )[0];
            lightboxImage.src = this.getElementsByTagName( 'img' )[0].src;
            setTimeout(function () {
                lightbox.style.display = 'block';
            }, 300);
            lightbox.style.display = 'block';
        })
    }

    lightboxCloseBtn.addEventListener( 'click', function() {
        //using timeout for some smoothness
        setTimeout( function () {
            lightbox.style.display = 'none';
        }, 300);
        lightbox.style.display = 'none';
    });

    function hideItems( categoryName ) {
		//going through every item that doesn't belong to current category
		for (var i = 0; i < imageWrappers.length; i++) {
			if (imageWrappers[i].dataset.category != categoryName) {
				imageWrappers[i].classList.add('hide');
			}
		}
    }
    
    function displayAll() {
        //removing .hide from any item that contains it
        for ( let j = 0; j < imageWrappers.length; j++ ) {
            if( imageWrappers[j].classList.contains( 'hide' ) ){
                imageWrappers[j].classList.remove( 'hide' );
            }
        }
    }
})()