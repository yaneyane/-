Page({
  data: {
    list: [
      {
        id: 'form',
        name: '特等奖',
        open: false,
      },
      {
        id: 'widget',
        name: '一等奖',
        open: false,
      },
      {
        id: 'feedback',
        name: '二等奖',
        open: false,
      },
      {
        id: 'nav',
        name: '三等奖',
        open: false,
      }
    ]
  },
  kindToggle: function (e) {
    var id = e.currentTarget.id, list = this.data.list;
    for (var i = 0, len = list.length; i < len; ++i) {
      if (list[i].id == id) {
        list[i].open = !list[i].open
      } 
    }
    this.setData({
      list: list
    });
  }
});
