document.addEventListener('DOMContentLoaded', function() {
    var button = document.querySelector('.read-more-button');
    var content = document.querySelector('.read-more-content');
  
    button.addEventListener('click', function() {
      if (content.style.display === 'none') {
        content.style.display = 'block';
        button.textContent = 'Read Less';
      } else {
        content.style.display = 'none';
        button.textContent = 'Read More';
      }
    });
  // });

//  document.addEventListener('DOMContentLoaded', function() {
  var button1 = document.querySelector('.read-more-button1');
  var content1 = document.querySelector('.read-more-content1');

  button.addEventListener('click', function() {
    if (content1.style.display === 'none') {
      content1.style.display = 'block';
      button1.textContent = 'Read Less';
    } else {
      content1.style.display = 'none';
      button1.textContent = 'Read More';
    }
  });
});
