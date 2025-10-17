window.onload = function() {
            const accordionHeaders = document.querySelectorAll('.accordion-header');

            
            accordionHeaders.forEach(header => {
                header.addEventListener('click', () => {
                    
                    const content = header.nextElementSibling;
                    
                    header.classList.toggle('active');
                    
                    if (header.classList.contains('active')) {
                        
                        setTimeout(() => {
                           content.style.maxHeight = content.scrollHeight + "px";
                        }, 0);
                        
                    } else {
                        content.style.maxHeight = "0"; 
                    }
                    
                });
            });
        };