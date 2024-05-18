document.addEventListener('DOMContentLoaded', function() {
    const selectElements = document.querySelectorAll('.label-inputs select');
  
    selectElements.forEach(function(selectElement) {
      selectElement.addEventListener('click', function() {
        selectElement.classList.toggle('focused');
      });
  
      selectElement.addEventListener('change', function() {
        const currentIndex = selectElement.selectedIndex;
  
        if (currentIndex !== 0) {
          selectElement.classList.add('focused');
        } else {
          selectElement.classList.remove('focused');
        }
      });
    });
  
    window.addEventListener('click', function(event) {
      const focusedSelect = document.querySelector('.label-inputs select.focused');
      if (focusedSelect && !event.target.closest('.label-inputs select')) {
        focusedSelect.classList.remove('focused');
      }
    });
  });