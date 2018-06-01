Page({
  data: {

  },

  onReady: function () {
    var WxParse = require('../../wxParse/wxParse.js');
    var article = '<label for="ActivityName">ActivityName1</label><input type="input" name="ActivityName" /><br/><label for="EndTime">EndTime1</label><textarea name="EndTime"></textarea><br/><input type="submit" name="submit"value="发起活动")"/>';
    var that = this;
    WxParse.wxParse('article', 'html', article, that, 5);
  }
});
