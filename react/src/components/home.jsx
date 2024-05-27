import React from "react";
import { useStateContext } from "../config/context";

function Home() {
    const { setNotification } = useStateContext();
  return (
      <>
      <section className="header-section">
            <div className="container">
              <div className="hero-wrapper">
                <h1 className="hero-heading">Game title</h1>
                <p className="hero-paragraphe">Lorem ipsum dolor sit akjasf alkjasdf aslfkjaskjfaksf asfl;dfjsdf</p>
                <div className="hero-button">
                  <a onClick={()=>setNotification('This is new Message!')} className="btn btn-light">Resevez!</a>
                </div>
              </div>
            </div>
          </section>
        <section className="section-article">
          <div className="container">
            <div className="title-box text-center">
              <h3 className="title-box-name">Our services</h3>
              <div className="title-separator mx-auto"><hr/></div>
              <p className="title-box-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate temporibus esse sunt aliquam, qui quas a deserunt vitae sit impedit quidem perferendis est laboriosam similique maiores commodi nam, neque sequi!</p>
            </div>
            <div className="article-list row">
              <div className="col-sm-12 row article">
                <div className="col-sm-12 col-md-4 article-img">
                  <img src="https://w7.pngwing.com/pngs/546/1022/png-transparent-running-free-content-runner-text-sport-logo.png" style={{ width: '200px', height: '200px' }} alt="" />
                </div>
                <div className="article-content col-sm-12 col-md-8">
                  <h3 className="article-heading">Article Title</h3>
                  <div className="article-paragraphe">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae inventore sit aliquid consequatur illo neque ut esse voluptates distinctio eveniet officia </p>
                  </div>
                </div>
              </div>
              <div className="article col-sm-12 row">
                <div className="col-sm-12 col-md-4 article-img">
                  <img src="https://cdn-icons-png.flaticon.com/512/157/157830.png" style={{ width: '200px', height: '200px' }} alt="" />
                </div>
                <div className="article-content col-sm-12 col-md-8">
                  <h3 className="article-heading">Article Title</h3>
                  <div className="article-paragraphe">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae inventore sit aliquid consequatur illo neque ut esse voluptates distinctio eveniet officia </p>
                  </div>
                </div>
              </div>
              <div className="article col-sm-12 row">
                <div className="col-sm-12 col-md-4 article-img">
                  <img src="https://banner2.cleanpng.com/20180404/gyw/kisspng-eating-computer-icons-restaurant-people-eating-5ac53a43945973.3512719115228749476077.jpg" style={{ width: '200px', height: '200px' }} alt="" />
                </div>
                <div className="article-content col-sm-12 col-md-8">
                  <h3 className="article-heading">Article Title</h3>
                  <div className="article-paragraphe">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae inventore sit aliquid consequatur illo neque ut esse voluptates distinctio eveniet officia </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section className="section-feedback">
          <div className="container">
            <div className="feedback-container">
              <div className="feedback-header">
                <h1>What our customers are saying</h1>
                <hr/>
              </div>
              <div className="row">
                <div className="col-sm-12 col-md-6 feedback-info">
                  <div>
                    <img src="https://banner2.cleanpng.com/20180404/gyw/kisspng-eating-computer-icons-restaurant-people-eating-5ac53a43945973.3512719115228749476077.jpg" alt="" />
                    <span className="feedback-username">John Doe</span>
                  </div>
                </div>
                <div className="col-sm-12 col-md-6 feedback-content">
                  <p className="text-center"><span>"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi dignissimos, praesentium inventore laborum exercitationem animi. Asperiores eum soluta suscipit reiciendis reprehenderit necessitatibus, rem voluptatibus officiis tempore, modi sit quia excepturi?<span>"</span></p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section className="section-button">
          <button>Reserver</button>
        </section>
      </>
    
  );
}

export default Home;
