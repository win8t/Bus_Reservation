<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Sidebars · Bootstrap v5.0</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
    #datetime{
      font-size: 24px;
      font-family: FontReg;
    }
    #datetime{
      font-size: 24px;
      font-family: FontReg;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="sidebars.css" rel="stylesheet">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="home" viewBox="0 0 16 16">
      <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
      <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
      <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
    </symbol>
    <symbol id="collection" viewBox="0 0 16 16">
      <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
    </symbol>
    <symbol id="calendar3" viewBox="0 0 16 16">
      <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
      <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
    </symbol>
    <symbol id="chat-quote-fill" viewBox="0 0 16 16">
      <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
    </symbol>
    <symbol id="cpu-fill" viewBox="0 0 16 16">
      <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
      <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
    </symbol>
    <symbol id="gear-fill" viewBox="0 0 16 16">
      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
    </symbol>
    <symbol id="speedometer" viewBox="0 0 16 16">
      <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
      <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
    </symbol>
    <symbol id="toggles2" viewBox="0 0 16 16">
      <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
      <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
      <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
    </symbol>
    <symbol id="tools" viewBox="0 0 16 16">
      <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
    </symbol>
    <symbol id="chevron-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
    </symbol>
    <symbol id="geo-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
    </symbol>
    <symbol id="card-list" viewBox="0 0 16 16">
      <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
      <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0" />
    </symbol>
    <symbol id="bus-front" viewBox="0 0 16 16">
      <path d="M5 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0m8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-6-1a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2zm1-6c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9s3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44 44 0 0 0 8 4m0-1c-1.837 0-3.353.107-4.448.22a.5.5 0 1 1-.104-.994A44 44 0 0 1 8 2c1.876 0 3.426.109 4.552.226a.5.5 0 1 1-.104.994A43 43 0 0 0 8 3" />
      <path d="M15 8a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1V2.64c0-1.188-.845-2.232-2.064-2.372A44 44 0 0 0 8 0C5.9 0 4.208.136 3.064.268 1.845.408 1 1.452 1 2.64V4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v3.5c0 .818.393 1.544 1 2v2a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V14h6v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-2c.607-.456 1-1.182 1-2zM8 1c2.056 0 3.71.134 4.822.261.676.078 1.178.66 1.178 1.379v8.86a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 11.5V2.64c0-.72.502-1.301 1.178-1.379A43 43 0 0 1 8 1" />
    </symbol>
    <symbol id="sign-turn-right" viewBox="0 0 16 16">
      <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098zM9 8.466V7H7.5A1.5 1.5 0 0 0 6 8.5V11H5V8.5A2.5 2.5 0 0 1 7.5 6H9V4.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L9.41 8.658A.25.25 0 0 1 9 8.466" />
    </symbol>
    <symbol id="calendar-date" viewBox="0 0 16 16">
      <path d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23" />
      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
    </symbol>
    <symbol id="search" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
    </symbol>
  </svg>

  <main>




    <div class=" b-example-divider  d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

        <img src="Alps.png" alt="" class="bi me-2 mx-auto" class="bi me-2" width="80%" height="100%">

      </a>

      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
          <a href="Overview.php" class="nav-link" aria-current="page">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#table" />
            </svg>
            Overview
          </a>
        </li> 
        <li class="nav-item">
          <a href="User.php" class="nav-link" aria-current="page">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#people-circle" />
            </svg>
            User
          </a>
        </li>
        <li class="nav-item">
          <a href="Logs.php" class="nav-link">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#card-list" />
            </svg>
            Logs
          </a>
        </li>
        <li class="nav-item">
          <a href="Bus.php" class="nav-link">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#bus-front" />
            </svg>
            Bus
          </a>
        </li>
        <li class="nav-item">
          <a href="Route.php" class="nav-link">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#sign-turn-right" />
            </svg>
            Route
          </a>
        </li>
        <li class="nav-item">
          <a href="Schedule.php" class="nav-link active">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#calendar3" />
            </svg>
            Schedule
          </a>
        </li>
        <li class="nav-item">
          <a href="Reservation.php" class="nav-link">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#calendar-date" />
            </svg>
            Reservation
          </a>
        </li>
      </ul>



      <hr>
      <div class="dropup-center dropup">
        <button class="btn btn-secondary dropdown-tog" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong class ="">Admin </strong>
          <span class ="d-flex justify-content-end"><i class="bi bi-caret-up-fill"></i></span>
        </button>
        <ul class="dropdown-menu p-1 mb-2">
          <li><a class="dropdown-item" href="#">Log Out</a></li>
        </ul>
      </div>
    </div>

    <div class="container-fluid">
    
      <div class="row bg-light border-top border-bottom border-2">
        <form action="Schedule.php" method="post">
          <div class="input-group w-50 py-2">
            <div class="input-group-text bg-primary-subtle" id="btnGroupAddon2"><img src="search.svg" alt=""></div>
            <input type="search" name="search" id="" class="form-control w-50" aria-label="Input group example" aria-describedby="btnGroupAddon2">


            <div class="col">
              <input type="submit" value="Search" name="searchbutton" class="btn btn-primary mx-2 button-font" class="form-control">
            </div>
            <!-- Date Time - Local -->
            <div class="row bg-light pt-2">
                <div id="datetime"></div>
                <script>
                  function updateDateTime() {
                    var now = new Date();
                    var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
                        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                    var dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                    var month = monthNames[now.getMonth()];
                    var day = now.getDate();
                    var year = now.getFullYear();
                    var dayOfWeek = dayNames[now.getDay()];
                    var time = now.toLocaleTimeString();
                    var dateTimeString = dayOfWeek + ', ' + month + ' ' + day + ', ' + year + ', ' + time;
                    document.getElementById('datetime').textContent = dateTimeString;
                  }
                  // Update the date and time every second
                  setInterval(updateDateTime, 1000);

                  // Initial update
                  updateDateTime();
                </script>
            </div>
          </div>
        </form>
      </div>
<!-- Modal Bootstrap -->

      <div class="row bg-light border-top border-bottom border-2 mt-2">
        <div class="col pb-2 mt-2">
          <h4 class="hd-font display-6">Schedule Details</h4>
            <button type="button" id="formDetailsBtn" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#formDetails">
            Add Schedule Details <!-- add icon -->
            </button>

          <div class="modal" id="formDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="title" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title fs-5" id="title">Schedule Details Form</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="Schedule.php" method="post">
                <div class="modal-body">
                  
                      <div class="row form-outline">
                    <!-- Schedule ID input -->
                        <!-- <div class="col">
                          <input type="number" name="schedule_id" id="" class="form-control" />
                          <label class="form-label" for="">Schedule ID</label>
                        </div> -->

                        <div class="col">
                      <!-- Bus ID input -->
                          <input type="number" name="bus_id" id="" class="form-control" />
                          <label class="form-label" for="">Bus ID</label>
                        </div>

                        <div class="col">
                      <!-- Route ID input -->
                          <input type="number" name="route_id" id="" class="form-control" />
                          <label class="form-label" for="">Route ID</label>
                        </div>
                    </div>
                      
                    <!-- Departure Date input -->
                      <div class="row form-outline">
                        <div class="col">
                          <input type="date" name="departure_date" id="" class="form-control" />
                          <label class="form-label" for="">Departure Date</label>
                        </div>
                    <!-- Departure Time input -->
                        <div class="col">
                          <input type="time" name="departure_time" id="" class="form-control" />
                          <label class="form-label" for="">Departure Time</label>
                        </div>
                      </div>

                      <!-- Available Seats input -->
                      <div class="form-outline">
                          <input type="number" name="available_seats" id="" class="form-control" />
                          <label class="form-label" for="">Available Seats</label>
                      </div>

                    <!-- Save button --> 
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button type="submit" name="add" class="btn btn-primary">Add</button>
                </div>
                </form> 
              </div>
            </div>
          </div>

          <?php
          require_once "dbconnect.php";

          //button function
          if (isset($_POST['searchbutton'])) {

            //to check the search box if empty or not 
            if ($_POST['search'] != NULL) {
              $search = $_POST['search'];
              $selectsql = "Select * from tbl_schedule where 
                schedule_id LIKE '%" . $search . "%' 
                OR bus_id LIKE '%" . $search . "%' 
                OR route_id LIKE '%" . $search . "%' 
                OR departure_date LIKE'%" . $search . "%' 
                OR departure_time LIKE'%" . $search . "%' 
                OR available_seats LIKE'%" . $search . "%' ";

            } else {
              $selectsql = "Select * from tbl_schedule";
            }
          } else {
            $selectsql = "Select * from tbl_schedule";
          }

          //Add Button
          if(isset($_POST['add'])){
            $busID = $_POST['bus_id'];
            $routeID = $_POST['route_id'];
            $departureDate = $_POST['departure_date'];
            $departureTime = $_POST['departure_time'];
            $availableSeats = $_POST['available_seats'];
            
            
            $insertsql = "Insert into tbl_schedule (bus_id,route_id,departure_date,departure_time,available_seats)
            values ($busID,$routeID,'$departureDate','$departureTime',$availableSeats)
            ";

            $result = $con->query($insertsql);
            
            
            //check if successfully added
            if ($result == True) {
                ?>
              <script> 
                Swal.fire({
                  title: "Do you want to add this user?",
                  showDenyButton: true,
                  showCancelButton: true,
                  confirmButtonText: "Add",
                  denyButtonText: `Don't Add`
                }).then((result) => {
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {
                    Swal.fire("Saved!", "", "success");
                  } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                  }
                });
                  </script>
                  <?php
            } else {
                //if not inserted, check query error details
                echo $con->error;
            }
          } 

          $result = $con->query($selectsql);

          //check table if there is a record
          //num_rows - will return the no of rows inside a table
          if ($result->num_rows > 0) {
         

            echo "<table class='table table-light table-striped text-center table-bordered my-2 border border-3'>";
            echo "<tr>";
    
            echo "</tr>";
            echo "<tr>";
            echo "<th> Schedule ID </th>";
            echo "<th> Bus ID </th>";
            echo "<th> Route ID </th>";
            echo "<th> Departure Date </th>";
            echo "<th> Depature Time </th>";
            echo "<th> Available Seats </th>";
            echo "<th> Action </th>";
            echo "</tr>";

            while ($fielddata = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $fielddata['schedule_id'] . "</td>";
              echo "<td>" . $fielddata['bus_id'] . "</td>";
              echo "<td>" . $fielddata['route_id'] . "</td>";
              echo "<td>" . $fielddata['departure_date'] . "</td>";
              echo "<td>" . date_format(date_create($fielddata['departure_time']), 'h:i A') . "</td>";
              echo "<td>" . $fielddata['available_seats'] . "</td>";
              echo "<td>" ?>
              <form method ='post' action ='Schedule.php'> 
               <?php   echo "<input type='hidden' name='schedule_id' value='" . $fielddata['schedule_id'] . "'>"; ?>
               <?php   echo "<input type='hidden' name='bus_id' value='" . $fielddata['bus_id'] . "'>"; ?>
               <?php   echo "<input type='hidden' name='route_id' value='" . $fielddata['route_id'] . "'>"; ?>
               <?php   echo "<input type='hidden' name='departure_date' value='" . $fielddata['departure_date'] . "'>"; ?>
               <?php   echo "<input type='hidden' name='departure_time' value='" . date_format(date_create($fielddata['departure_time']), 'h:i A') . "'>"; ?>
               <?php   echo "<input type='hidden' name='available_seats' value='" . $fielddata['available_seats'] . "'>"; ?>
                <button class='btn btn-primary edit-button' name='edit'>Edit</button>
                <button class='btn btn-danger delete-button' name='delete'>Delete</button>
              </form>
              <?php "</td>";
            }
            echo "</table>";
          } else {
            echo "<div class='row'>";
            echo "<div class='col'>";
            echo "<br>No record found!";
            echo "</div>";
            echo "</div>";
          }

          //Edit Button
          if(isset($_POST['edit'])){ 
            $scheduleID_update = $_POST['schedule_id'];
            $busID_update = $_POST['bus_id'];
            $routeID_update = $_POST['route_id'];
            $departureDate_update = $_POST['departure_date'];
            $departureTime_update = $_POST['departure_time'];
            $availableSeats_update = $_POST['available_seats'];
            
            ?>
                <form action="Schedule.php" method="post">
                <div class="modal-body">
                  
                      <div class="row form-outline">
                    <!-- Schedule ID input -->
                        <div class="col">
                          <input type="number" name="update_scheduleID" value="<?php echo $scheduleID_update; ?>" class="form-control" readonly/>
                          <label class="form-label" for="">Schedule ID</label>
                        </div>

                        <div class="col">
                      <!-- Bus ID input -->
                          <input type="number" name="update_busID" value="<?php echo $busID_update; ?>" class="form-control" />
                          <label class="form-label" for="">Bus ID</label>
                        </div>

                        <div class="col">
                      <!-- Route ID input -->
                          <input type="number" name="update_routeID" value="<?php echo $routeID_update; ?>" class="form-control" />
                          <label class="form-label" for="">Route ID</label>
                        </div>
                    </div>
                      
                    <!-- Departure Date input -->
                      <div class="row form-outline">
                        <div class="col">
                          <input type="date" name="update_departureDate" value="<?php echo $departureDate_update; ?>" class="form-control" />
                          <label class="form-label" for="">Departure Date</label>
                        </div>
                    <!-- Departure Time input -->
                        <div class="col">
                          <input type="time" name="update_departureTime" value="<?php echo $departureTime_update; ?>" class="form-control" />
                          <label class="form-label" for="">Departure Time</label>
                        </div>
                      </div>

                      <!-- Available Seats input -->
                      <div class="form-outline">
                          <input type="number" name="update_availableSeats" value="<?php echo $availableSeats_update; ?>" class="form-control" />
                          <label class="form-label" for="">Available Seats</label>
                      </div>

                    <!-- Save button --> 
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button type="submit" name="updating" value="Update" class="btn btn-success">Update</button>
                </div>
                </form> 

           <?php 
           
              
        }

        //Delete Button
          if(isset($_POST['delete'])){
            $sched_delete = $_POST['schedule_id']; // Retrieve the user_id from the form
  
            // Use prepared statements to prevent SQL injection
            $deletesql = "DELETE FROM tbl_schedule WHERE schedule_id = ?";
            $stmt = $con->prepare($deletesql);
            $stmt->bind_param("i", $sched_delete); // Assuming user_id is an integer
            $resultdel = $stmt->execute();
            
            
            //check if successfully deleted
            if ($resultdel == True) {
                ?>
              <script> 
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                  }).then((result) => {
                    if (result.isConfirmed) {
                      Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                      });
                    }
                  });
                  </script>
                  <?php
            } else {
                //if not, check query error details
                echo $con->error;
            }
          } 

          //Update Button

          require_once "dbconnect.php";

          if (isset($_POST['updating'])) {
            $scheduleID_update = $_POST['update_scheduleID'];
            $busID_update = $_POST['update_busID'];
            $routeID_update = $_POST['update_routeID'];
            $departureDate_update = $_POST['update_departureDate'];
            $departureTime_update = $_POST['update_departureTime'];
            $availableSeats_update = $_POST['update_availableSeats'];

            

            $updatesql = "UPDATE tbl_schedule SET schedule_id = $scheduleID_update, bus_id = $busID_update,
            route_id = $routeID_update, departure_date = '$departureDate_update', departure_time = '$departureTime_update',
            available_seats = $availableSeats_update WHERE schedule_id = $scheduleID_update";
            
            $resultup = $con->query($updatesql);
            
            //check if successfully updated
            if ($resultup == True) {
                ?>
              <script> 
                Swal.fire({
                  title: "Do you want to update?",
                  showDenyButton: true,
                  showCancelButton: true,
                  confirmButtonText: "Update",
                  denyButtonText: `Don't Update`
                }).then((result) => {
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {
                    Swal.fire("Updated!", "", "success");
                  } else if (result.isDenied) {
                    Swal.fire("Changes are not updated", "", "info");
                  }
                });
                  </script>
                  <?php
            } else {
                //if not, check query error details
                echo $con->error;
            }
          }



          ?>
    </div>
    </div>

  <script src="modal.js"></script>
  <script src="sidebars.js"></script>
  </main>
</body>

</html>