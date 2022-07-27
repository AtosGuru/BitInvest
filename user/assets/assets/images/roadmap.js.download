(function ($) {
    //Strict mood enabled
    "use strict";
    // dataRoot : '/'
    var myMappedObject = [
      {
          "isSelected": "true",
          "taskTitle": "Project Idea",
          "taskSubTitle": "December 16th, 2017",
          "assignDate": "16/12/2017",
          "taskShortDate": "16 Dec 2017",
          "taskDetails": "We created an idea when developed City One Apps second Kickstarter project, it was launched a few years ago."
      },
      {
          "isSelected": "",
          "taskTitle": "Business Conception",
          "taskSubTitle": "January 1st, 2018",
          "assignDate": "01/01/2018",
          "taskShortDate": "01 Jan 2018",
          "taskDetails": 'Learn about the Force, Luke. Look, I can take you as far as Anchorhead. You can get a transport there to Mos Eisley or wherever you\'re going. You must do what you feel is right, of course.'
      },
      {
          "isSelected": "",
          "taskTitle": "Legal Review",
          "taskSubTitle": "February 1st, 2018",
          "assignDate": "01/02/2018",
          "taskShortDate": "01 Feb 2018",
          "taskDetails": 'International ICOs may need to consider US regulations to avoid falling foul of the SEC in the event of US persons acquiring tokens.'
      },
      {
          "isSelected": "",
          "taskTitle": "ICO and Token Design",
          "taskSubTitle": "May 01st, 2018",
          "assignDate": "01/05/2014",
          "taskShortDate": "01 May 2018",
          "taskDetails": 'We created an idea when developed City One Apps second Kickstarter project, it was launched a few years ago.'
      },
      {
          "isSelected": "",
          "taskTitle": "Token Sale and Marketing",
          "taskSubTitle": "July 9th, 2014",
          "assignDate": "09/07/2014",
          "taskShortDate": "09 July 2018",
          "taskDetails": 'Targeted marketing strategy. Reliable solution for your token sale and promotion.'
      },
      {
          "isSelected": "",
          "taskTitle": "Token Sale and Marketing",
          "taskSubTitle": "January 1st, 2019",
          "assignDate": "01/01/2019",
          "taskShortDate": "01 Jan",
          "taskDetails": 'Targeted marketing strategy. Reliable solution for your token sale and promotion.'
      }
];

var jtLine = $('.bitcoinTimeline').jTLine({
    callType: 'jsonObject',
    structureObj: myMappedObject,
    map: {
        "dataRoot": "/",
        "title": "taskTitle",
        "subTitle": "taskSubTitle",
        "dateValue": "assignDate",
        "pointCnt": "taskShortDate",
        "bodyCnt": "taskDetails"
    },
    distanceMode: 'fixDistance', // 'fixDistance' 'auto' 'predefinedDistance'
    eventsMinDistance: 60,       // Consider It as Distance Unit "by Pixel"
    fixDistanceValue: 2,         // if eventsMinDistance = 60 & fixDistanceValue= 2 then the value is: (60*2) = 120 px
    firstPointMargin: 1          // First Point Margin from the left
});

})(jQuery);