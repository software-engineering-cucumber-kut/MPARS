// 「コピーする」ボタンを押した時
function cp(){
    //textareaの要素を選択する
    document.getElementById('description').select();
    //選択中の要素をクリップボードへコピーする
    document.execCommand('copy');
    //コピーした時の通知
    alert('レビュー内容をコピーしました。');
}
