

document.addEventListener('DOMContentLoaded', () => {
    const currentPage = './navbar.css';
    const links = document.querySelectorAll('.side-nav-links');

    links.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
        }
    });
});

// rightside bar

function Widget() {
    const widget = document.createElement('div');
    widget.className = 'widget';
  
    const blogPosts = [
      {
        imgSrc: 'pen',
        content: 'Observability is key to the future of software (and your DevOps career)',
      },
      {
        imgSrc: 'pen',
        content: 'Podcast 374: How valuable is your screen name?',
      },
      // Add more blog post data as needed
    ];
  
    const featuredMeta = [
      {
        imgSrc: 'comment',
        content: 'Review queue workflows - Final release....',
      },
      {
        imgSrc: 'comment',
        content: 'Please welcome Valued Associates: #958 - V2Blast #959 - SpencerG',
      },
      // Add more featured meta data as needed
    ];
  
    const hotMeta = [
      {
        count: '38',
        content: 'Why was this spam flag declined, yet the question marked as spam?',
      },
      {
        count: '20',
        content: 'What is the best course of action when a user has high enough rep to...',
      },
      // Add more hot meta data as needed
    ];
  
    function createDiv(className, children) {
      const div = document.createElement('div');
      div.className = className;
      children.forEach(child => div.appendChild(child));
      return div;
    }
  
    function createPostElement({ imgSrc, content }) {
      const div = document.createElement('div');
      div.className = 'right-sidebar-div-2';
  
      const img = document.createElement('img');
      img.src = imgSrc; // Add correct path to images
      img.alt = 'icon';
      img.width = '18';
  
      const p = document.createElement('p');
      p.textContent = content;
  
      div.appendChild(img);
      div.appendChild(p);
      return div;
    }
  
    function createHotMetaElement({ count, content }) {
      const div = document.createElement('div');
      div.className = 'right-sidebar-div-2';
  
      const countP = document.createElement('p');
      countP.textContent = count;
  
      const contentP = document.createElement('p');
      contentP.textContent = content;
  
      div.appendChild(countP);
      div.appendChild(contentP);
      return div;
    }
  
    const overflowBlog = createDiv('right-sidebar-div-1', [
      createPostElement(blogPosts[0]),
      createPostElement(blogPosts[1]),
    ]);
  
    const featuredMetaDiv = createDiv('right-sidebar-div-1', [
      createPostElement(featuredMeta[0]),
      createPostElement(featuredMeta[1]),
      createPostElement(featuredMeta[2]),
    ]);
  
    const hotMetaDiv = createDiv('right-sidebar-div-1', [
      createHotMetaElement(hotMeta[0]),
      createHotMetaElement(hotMeta[1]),
      createHotMetaElement(hotMeta[2]),
    ]);
  
    const overflowBlogTitle = document.createElement('h4');
    overflowBlogTitle.textContent = 'The Overflow Blog';
  
    const featuredMetaTitle = document.createElement('h4');
    featuredMetaTitle.textContent = 'Featured on Meta';
  
    const hotMetaTitle = document.createElement('h4');
    hotMetaTitle.textContent = 'Hot Meta Posts';
  
    widget.appendChild(overflowBlogTitle);
    widget.appendChild(overflowBlog);
    widget.appendChild(featuredMetaTitle);
    widget.appendChild(featuredMetaDiv);
    widget.appendChild(hotMetaTitle);
    widget.appendChild(hotMetaDiv);
  
    return widget;
  }
  
  function WidgetTags() {
    const widgetTags = document.createElement('div');
    widgetTags.className = 'widget-tags';

    const tags = ['c', 'css', 'express', 'firebase', 'html', 'java', 'javascript', 'mern', 'mongodb', 'mysql', 'next.js', 'node.js', 'php', 'python', 'reactjs'];
  
    const watchedTagsTitle = document.createElement('h4');
    watchedTagsTitle.textContent = 'Watched tags';
  
    const tagsDiv = document.createElement('div');
    tagsDiv.className = 'widget-tags-div';
  
    tags.forEach(tag => {
      const p = document.createElement('p');
      p.textContent = tag;
      tagsDiv.appendChild(p);
    });
  
    widgetTags.appendChild(watchedTagsTitle);
    widgetTags.appendChild(tagsDiv);
  
    return widgetTags;
  }
  
  document.addEventListener('DOMContentLoaded', () => {
    const rightSidebar = document.querySelector('.right-sidebar');
  
    const widget = Widget();
    const widgetTags = WidgetTags();
  
    rightSidebar.appendChild(widget);
    rightSidebar.appendChild(widgetTags);
  });


//   top questions //
document.addEventListener('DOMContentLoaded', () => {

  let questionsList;

  fetch('getAllquestions.php')
      .then(response => response.json())
      .then(questions => {
          questionsList = questions;
          renderQuestions();
      })
      .catch(error => {
          console.error('Error fetching questions:', error);
      });

  function createQuestionElement(question) {
      const questionContainer = document.createElement('div');
      questionContainer.classList.add('display-question-container');

      const questionDetailsDiv = document.createElement('div');
      questionDetailsDiv.classList.add('display-question-details');

      const votesAnsDiv = document.createElement('div');
      votesAnsDiv.classList.add('display-votes-ans');
      votesAnsDiv.innerHTML = `<p>${question.vote}</p><p>votes</p>`;


      const answersCountDiv = document.createElement('div');
      answersCountDiv.classList.add('display-answers-count');
      answersCountDiv.innerHTML = `<p>${question.answersCount}</p><p>answers</p>`;

      const questionTitleLink = document.createElement('a');
      questionTitleLink.classList.add('question-title-link');
      questionTitleLink.textContent = question.title;
      questionTitleLink.href = `/Questions/${question._id}`;



      const tagsTimeDiv = document.createElement('div');
      tagsTimeDiv.classList.add('display-tags-time');

      const tagsDiv = document.createElement('div');
      tagsDiv.classList.add('display-tags');
      const tagsArray = question.tags.split(',');

      tagsArray.forEach(tag => {
          const tagP = document.createElement('p');
          tagP.textContent = tag.trim();
          tagsDiv.appendChild(tagP);
      });

      const timeP = document.createElement('p');
      timeP.classList.add('display-time');
      timeP.textContent = `Asked by ${question.userPosted} on ${question.Asked_date}`;

      // tagsTimeDiv.appendChild(tagsDiv);
      tagsTimeDiv.appendChild(timeP);

      questionDetailsDiv.appendChild(votesAnsDiv);
      questionDetailsDiv.appendChild(answersCountDiv);
      questionDetailsDiv.appendChild(questionTitleLink);
      questionDetailsDiv.appendChild(tagsDiv);
      questionDetailsDiv.appendChild(tagsTimeDiv);



      questionContainer.appendChild(questionDetailsDiv);

      return questionContainer;
  }

  function renderQuestions() {
      const questionsContainer = document.querySelector('.questions-container');
      const questionsCount = document.querySelector('.questions-count');

      if (questionsList) {
          questionsCount.textContent = `${questionsList.length} questions`;

          questionsList.forEach(question => {
              const questionElement = createQuestionElement(question);
              questionsContainer.appendChild(questionElement);
          });
      }
  }



});

    