# CodeIgniter 4 - Server Sent Event

![스크린샷](./%EC%8A%A4%ED%81%AC%EB%A6%B0%EC%83%B7%202023-02-03%20%EC%98%A4%EC%A0%84%2011.41.42.png)


환경
- macOS Monterey 버전 12.6
- PHP 7.4.33
- CodeIgniter 4.3.1

실행

```shell
php spark serve
```

구현사항
- 1초 단위로 ping 을 전송하며 랜덤한 간격으로 message 를 전송

<br>
<br>

[참고]

[Server-Sent Events 사용하기 - Web API | MDN](https://developer.mozilla.org/ko/docs/Web/API/Server-sent_events/Using_server-sent_events) 
[Server Sent Events with CodeIgniter - Push Notifications - Roy Tutorials](https://roytuts.com/server-sent-events-with-codeigniter-push-notifications/)
[Server-Sent Events를 이용한 비동기 통신 구현 및 트러블슈팅 | 공책 팀 개발 블로그](https://gong-check.github.io/dev-blog/BE/%EC%96%B4%EC%8D%B8%EC%98%A4/sse/sse)