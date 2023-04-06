// Get the form and button elements
const form = document.querySelector('.new-post-form');
const button = document.querySelector('.submit-button');

// Add an event listener to the button
button.addEventListener('click', (event) => {
  event.preventDefault();
  
  // Get the input values
  const title = document.querySelector('#post-title').value;
  const content = document.querySelector('#post-content').value;

  // Create a new post element
  const post = document.createElement('li');
  post.classList.add('post');

  // Create the post title element
  const postTitle = document.createElement('h3');
  postTitle.classList.add('post-title');
  postTitle.textContent = title;

  // Create the post content element
  const postContent = document.createElement('div');
  postContent.classList.add('post-content');
  postContent.textContent = content;

  // Create the post meta element
  const postMeta = document.createElement('div');
  postMeta.classList.add('post-meta');
  postMeta.textContent = 'Posted on ' + new Date().toLocaleString();

  // Add the post title, content, and meta to the post element
  post.appendChild(postTitle);
  post.appendChild(postContent);
  post.appendChild(postMeta);

  // Add the post element to the post list
  const postList = document.querySelector('.post-list');
  postList.appendChild(post);

  // Clear the input fields
  document.querySelector('#post-title').value = '';
  document.querySelector('#post-content').value = '';
});

// Add an event listener to the reply buttons
const replyButtons = document.querySelectorAll('.reply-button');
replyButtons.forEach(button => {
  button.addEventListener('click', (event) => {
    event.preventDefault();

    // Get the reply form and post ID
    const replyForm = button.nextElementSibling;
    const postId = button.dataset.postId;

    // Show the reply form
    replyForm.style.display = 'block';

    // Add an event listener to the reply form button
    const replyButton = replyForm.querySelector('.submit-reply-button');
    replyButton.addEventListener('click', (event) => {
      event.preventDefault();

      // Get the reply content
      const replyContent = replyForm.querySelector('.reply-content').value;

      // Create a new reply element
      const reply = document.createElement('div');
      reply.classList.add('reply');

      // Create the reply content element
      const replyContentElement = document.createElement('div');
      replyContentElement.classList.add('reply-content');
      replyContentElement.textContent = replyContent;

      // Create the reply meta element
      const replyMeta = document.createElement('div');
      replyMeta.classList.add('reply-meta');
      replyMeta.textContent = 'Replied on ' + new Date().toLocaleString();

      // Add the reply content and meta to the reply element
      reply.appendChild(replyContentElement);
      reply.appendChild(replyMeta);

      // Add the reply element to the reply list
      const replyList = document.querySelector(`#reply-list-${postId}`);
      replyList.appendChild(reply);

      // Hide the reply form
      replyForm.style.display = 'none';

      // Clear the reply input field
      replyForm.querySelector('.reply-content').value = '';
    });
  });
});
