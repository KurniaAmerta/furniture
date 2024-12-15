document.addEventListener("DOMContentLoaded", function () {
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
        const header = item.querySelector('.flex');

        // Set initial state for the accordion
        const content = item.querySelector('.accordion-content');
        const iconClosed = header.querySelector('.icon-closed');
        const iconOpen = header.querySelector('.icon-open');

        // Close all accordions initially
        content.style.maxHeight = null;
        iconClosed.style.display = 'block';
        iconOpen.style.display = 'none';

        header.addEventListener('click', () => {
            toggleAccordion(item);
        });
    });

    function toggleAccordion(item) {
        const content = item.querySelector('.accordion-content');
        const iconClosed = item.querySelector('.icon-closed');
        const iconOpen = item.querySelector('.icon-open');

        if (content.style.maxHeight) {
            // Close the accordion
            content.style.maxHeight = null;
            iconClosed.style.display = 'block';
            iconOpen.style.display = 'none';
        } else {
            // Close all accordions first
            accordionItems.forEach(innerItem => {
                const innerContent = innerItem.querySelector('.accordion-content');
                const innerIconClosed = innerItem.querySelector('.icon-closed');
                const innerIconOpen = innerItem.querySelector('.icon-open');

                innerContent.style.maxHeight = null;
                innerIconClosed.style.display = 'block';
                innerIconOpen.style.display = 'none';
            });

            // Then open the selected accordion
            content.style.maxHeight = content.scrollHeight + "px";
            iconClosed.style.display = 'none';
            iconOpen.style.display = 'block';
        }
    }
});
