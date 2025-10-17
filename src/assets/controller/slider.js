window.onload = function() {
            // 1. Select all accordion headers
            const accordionHeaders = document.querySelectorAll('.accordion-header');

            // 2. Loop through each header to attach a click listener
            accordionHeaders.forEach(header => {
                header.addEventListener('click', () => {
                    
                    // Get the corresponding content panel (it's the next sibling element)
                    const content = header.nextElementSibling;
                    
                    // Toggle the 'active' class on the header
                    header.classList.toggle('active');
                    
                    // Check if the panel is now active (open)
                    if (header.classList.contains('active')) {
                        // Set the max-height to the scrollHeight to reveal the content
                        // The scrollHeight is the minimum height required to fit all content
                        // We use a slight delay for better synchronization with the CSS transition
                        setTimeout(() => {
                           content.style.maxHeight = content.scrollHeight + "px";
                        }, 0);
                        
                    } else {
                        // If closing, set max-height back to 0
                        // Note: Setting it directly to 0 starts the smooth collapse transition.
                        content.style.maxHeight = "0"; 
                    }
                    
                });
            });
        };