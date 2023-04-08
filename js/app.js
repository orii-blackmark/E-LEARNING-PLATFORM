class Chatbox {
    constructor() {
      this.args = {
        openButton: document.querySelector('.chatbox__button'),
        chatBox: document.querySelector('.chatbox__support'),
        sendButton: document.querySelector('.send__button')
      }
  
      this.state = false;
      this.messages = [];
      this.techSupportQA = {
        "How do I reset my password?": "To reset your password, click on the 'Forgot password' link on the login page and follow the instructions provided.",
        "How do I enroll in a course?": "To enroll in a course, go to the course page and click on the 'Enroll' button.",
        "How do I access my course materials?": "To access your course materials, go to your course page and click on the 'Materials' tab.",
        "How do I contact my instructor?": "To contact your instructor, go to your course page and click on the 'Instructor' tab. You can send a message to your instructor from there.",
        "How do I view my grades?": "To view your grades, go to your course page and click on the 'Grades' tab.",
        "How do I submit an assignment?": "To submit an assignment, go to your course page and click on the 'Assignments' tab. Find the assignment you need to submit and follow the instructions provided.",
        "How do I view my course schedule?": "To view your course schedule, go to your course page and click on the 'Schedule' tab.",
        "How do I view my course announcements?": "To view your course announcements, go to your course page and click on the 'Announcements' tab.",
        "How do I view my course discussions?": "To view your course discussions, go to your course page and click on the 'Discussions' tab.",
        "How do I view my course calendar?": "To view your course calendar, go to your course page and click on the 'Calendar' tab.",
        "How do I view my course syllabus?": "To view your course syllabus, go to your course page and click on the 'Syllabus' tab.",
        "How do I view my course resources?": "To view your course resources, go to your course page and click on the 'Resources' tab.",
        "How do I view my course quizzes?": "To view your course quizzes, go to your course page and click on the 'Quizzes' tab.",
        "How do I view my course exams?": "To view your course exams, go to your course page and click on the 'Exams' tab.",
        "How do I view my course surveys?": "To view your course surveys, go to your course page and click on the 'Surveys' tab.",
        "How do I view my course polls?": "To view your course polls, go to your course page and click on the 'Polls' tab.",
        "How do I view my course videos?": "To view your course videos, go to your course page and click on the 'Videos' tab.",
        "How do I view my course audio?": "To view your course audio, go to your course page and click on the 'Audio' tab.",
        "How do I view my course documents?": "To view your course documents, go to your course page and click on the 'Documents' tab.",
        "How do I view my course images?": "To view your course images, go to your course page and click on the 'Images' tab.",
        "How do I view my course links?": "To view your course links, go to your course page and click on the 'Links' tab.",
        "How do I view my course pages?": "To view your course pages, go to your course page and click on the 'Pages' tab.",
        "How do I view my course blogs?": "To view your course blogs, go to your course page and click on the 'Blogs' tab.",
        "How do I view my course wikis?": "To view your course wikis, go to your course page and click on the 'Wikis' tab.",
        "How do I view my course forums?": "To view your course forums, go to your course page and click on the 'Forums' tab.",
        "How do I view my course glossaries?": "To view your course glossaries, go to your course page and click on the 'Glossaries' tab.",
        "How do I view my course portfolios?": "To view your course portfolios, go to your course page and click on the 'Portfolios' tab.",
        "How do I view my course journals?": "To view your course journals, go to your course page and click on the 'Journals' tab.",
        "How do I view my course workspaces?": "To view your course workspaces, go to your course page and click on the 'Workspaces' tab.",
        "How do I view my course databases?": "To view your course databases, go to your course page and click on the 'Databases' tab.",
        "How do I view my course repositories?": "To view your course repositories, go to your course page and click on the 'Repositories' tab.",
        "How do I view my course questionnaires?": "To view your course questionnaires, go to your course page and click on the 'Questionnaires' tab.",
        "How do I view my course question banks?": "To view your course question banks, go to your course page and click on the 'Question Banks' tab.",
        "How do I view my course question pools?": "To view your course question pools, go to your course page and click on the 'Question Pools' tab.",
        "How do I view my course question sets?": "To view your course question sets, go to your course page and click on the 'Question Sets' tab.",
        "How do I view my course questionnaires?": "To view your course questionnaires, go to your course page and click on the 'Questionnaires' tab.",
        "hello": "Hi, how can I help you?",
        "hi": "Hi, how can I help you?",
        "hey": "Hi, how can I help you?",
        "good morning": "Good morning, how can I help you?",
        "good afternoon": "Good afternoon, how can I help you?",
        "good evening": "Good evening, how can I help you?",
        "good night": "Good night, how can I help you?",
        "bye": "Bye, have a nice day!",
        "goodbye": "Bye, have a nice day!",
        "see you later": "Bye, have a nice day!",
        "see you soon": "Bye, have a nice day!",
        "see you": "Bye, have a nice day!",
        "bye bye": "Bye, have a nice day!",
        "bye-bye": "Bye, have a nice day!",
        "bye bye bye": "Bye, have a nice day!",
        "bye-bye-bye": "Bye, have a nice day!",
        "bye bye bye bye": "Bye, have a nice day!",
        "bye-bye-bye-bye": "Bye, have a nice day!",
        "bye bye bye bye bye": "Bye, have a nice day!",
        "bye-bye-bye-bye-bye": "Bye, have a nice day!",
        "how are you?": "I am fine, thank you. How are you?",
        "am fine": "I am fine, thank you. How are you?",
        "am good": "I am fine, thank you. How are you?",
        "am great": "I am fine, thank you. How are you?",
        "am awesome": "I am fine, thank you. How are you?",
        "am wonderful": "I am fine, thank you. How are you?",
        "am amazing": "I am fine, thank you. How are you?",
        "am good thanks": "I am fine, thank you. How are you?",
        "am good thank you": "I am fine, thank you. How are you?",
        "am good thank you and you": "I am fine, thank you. How are you?",
        "how was your day?": "My day was great, thank you. How was yours?",
        "how was your day": "My day was great, thank you. How was yours?",
        "how was your day today?": "My day was great, thank you. How was yours?",
        "how was your day today": "My day was great, thank you. How was yours?",
        "how was your day yesterday?": "My day was great, thank you. How was yours?",
        "how was your day yesterday": "My day was great, thank you. How was yours?",
        "how was your day last week?": "My day was great, thank you. How was yours?",
        "how was your day last week": "My day was great, thank you. How was yours?",
        "how was your day last month?": "My day was great, thank you. How was yours?",
        "how was your day last month": "My day was great, thank you. How was yours?",
        "how was your day last year?": "My day was great, thank you. How was yours?",
        "how was your day last year": "My day was great, thank you. How was yours?",
        "how was your day last week?": "My day was great, thank you. How was yours?",
        "how was your day last week": "My day was great, thank you. How was yours?",
        "how was your day last month?": "My day was great, thank you. How was yours?",
        "how was your day last month": "My day was great, thank you. How was yours?",
        "am also fine": "That's great to hear!",
        "your name?": "My name is Ols Chatbot.",
        "your name": "My name is Ols Chatbot.",
        "what is your name?": "My name is Ols Chatbot.",
        "what is your name": "My name is Ols Chatbot.",
        "what's your name?": "My name is Ols Chatbot.",
        "what's your name": "My name is Ols Chatbot.",
        "who are you?": "I am Ols Chatbot.",
        "who are you": "I am Ols Chatbot.",
        "who are you?": "I am Ols Chatbot.",
        "who are you": "I am Ols Chatbot.",
        "how old are you?": "I am 1 day old.",
        "can you help me?": "Yes, I can help you.",
        "can you help me": "Yes, I can help you.",
        "how can you help me?": "I can help you with your questions about this site.",
        "how can i be of service?": "I can help you with your questions about this site and how to navigate through.",
        "How do I track my progress in a course?": "To track your progress in a course, go to your course page and click on the 'Progress' tab.",
        "How do I communicate with my instructor or other students?": " To communicate with your instructor or other students, use the messaging feature within the course. Click on the 'Messages' tab to access your inbox and compose a message to send. You can also respond to messages you have received from others.",
        " How do I create an account?": "To create an account, click on the 'Sign Up' button on the top right corner of the page. You will be asked to fill out a form with your personal information. Once you have completed the form, click on the 'Sign Up' button to create your account.",
        "How do I log in?": "To log in, click on the 'Log In' button on the top right corner of the page. You will be asked to enter your username and password. Once you have entered your credentials, click on the 'Log In' button to access your account.",
        "How do I change my password?": "To change your password, go to your account page and click on the 'Change Password' tab. You will be asked to enter your current password and a new password. Once you have entered your credentials, click on the 'Change Password' button to change your password.",
        "How do I change my email address?": "To change your email address, go to your account page and click on the 'Change Email' tab. You will be asked to enter your current password and a new email address. Once you have entered your credentials, click on the 'Change Email' button to change your email address.",
        "How do I change my username?": "To change your username, go to your account page and click on the 'Change Username' tab. You will be asked to enter your current password and a new username. Once you have entered your credentials, click on the 'Change Username' button to change your username.",
        "How do I change my profile picture?": "To change your profile picture, go to your account page and click on the 'Change Profile Picture' tab. You will be asked to enter your current password and a new profile picture. Once you have entered your credentials, click on the 'Change Profile Picture' button to change your profile picture.",
        "How do I change my profile picture?": "To change your profile picture, go to your account page and click on the 'Change Profile Picture' tab. You will be asked to enter your current password and a new profile picture. Once you have entered your credentials, click on the 'Change Profile Picture' button to change your profile picture.",
        "How do I access my courses?": "To access your courses, simply log in to your account and click on the 'My Courses' tab. Here you will find a list of all the courses you have enrolled in. Click on the course you would like to access and you will be taken to the course page.",
        "what can you do?": "I can help you with your questions about this site.",
        "what can you tell me about yourself?": "I am the one the gets you out of trouble when you are stuck.",
        "can i get your number?": "I am not allowed to give out my number.",
        "can i get your picture?": "yeah sure, here you go.",
        "How are you?": "I am fine, how about you?",
        "how are you": "I am fine, how about you?",
        "niaje": "nko fity",
        "niaje?": "nko fity",
        "What are you doing?": "I am chatting with you.",
        "what are you doing?": "I am chatting with you.",
        "what are you doing": "I am chatting with you.",
        "what is your nature?": "I am a chatbot.",
        "what is your nature": "I am a chatbot.",
        "What is your nature?": "I am a chatbot.",
        "What is your nature": "I am a chatbot.",
        "uko aje?": "nko fity",
        "uko aje": "nko fity",
        "Uko aje?": "nko fity",
        "Uko aje": "nko fity",
        "À plus tard! (See you later!) ":"À plus tard!  Passe une bonne journée. (See you later! Have a good day.)",
        "À bientôt! (See you soon!)":"À bientôt! ",
        "Au revoir! (Goodbye!)":"Au revoir! À bientôt. (Goodbye! See you soon.)",
        "bonjour(hello)":"Bonjour! Comment ça va? (Hello! How are you?)",
        "salut(hi)":"Salut! Comment ça va? (Hi! How are you?)",
        "bonjour(hello)":"Bonjour! Bienvenue. (Hello! Welcome.)",
        "salut(hi)":"Salut! Enchanté(e). (Hi! Nice to meet you.)",
        "Hi! How's your day going?":"Hi there! It's going pretty well, thanks for asking.",
        "hi! How's your day going?":"Hi there! It's going pretty well, thanks for asking.",
        "How about you?":"My day has been alright so far. How about yours?",
        


      };
    }
    
    display() {
      const { openButton, chatBox, sendButton } = this.args;
  
      openButton.addEventListener('click', () => this.toggleState(chatBox));
  
      sendButton.addEventListener('click', () => this.onSendButton(chatBox));
  
      const node = chatBox.querySelector('input');
      node.addEventListener("keyup", ({ key }) => {
        if (key === "Enter") {
          this.onSendButton(chatBox);
        }
      })
    }
  
    toggleState(chatbox) {
      this.state = !this.state;
  
      // show or hides the box
      if (this.state) {
        chatbox.classList.add('chatbox--active')
      } else {
        chatbox.classList.remove('chatbox--active')
      }
    }
  
    onSendButton(chatbox) {
      var textField = chatbox.querySelector('input');
      let text1 = textField.value
      if (text1 === "") {
        return;
      }
  
      let msg1 = { name: "User", message: text1 }
      this.messages.push(msg1);
  
      let response = "I'm sorry, I don't understand. Please try asking me something else.";
      for (let question in this.techSupportQA) {
        if (text1.toLowerCase().includes(question.toLowerCase())) {
          response = this.techSupportQA[question];
          break;
        }
      }
  
      let msg2 = { name: "Sam", message: response };
      this.messages.push(msg2);
  
      this.updateChatText(chatbox)
      textField.value = '';
    }
  
    updateChatText(chatbox) {
      var html = '';
      this.messages.slice().reverse().forEach(function (item, index) {
        if (item.name === "Sam") {
          html += '<div class="messages__item messages__item--visitor">' + item.message + '</div>'
        }
        else {
          html += '<div class="messages__item messages__item--operator">' + item.message + '</div>'
        }
      });
  
      const chatmessage = chatbox.querySelector('.chatbox__messages');
      chatmessage.innerHTML = html;
    }
  }
  
  
  const chatbox = new Chatbox();
  chatbox.display();
  