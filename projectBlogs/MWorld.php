<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Aamir's Blog</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
        <style>
        .heroq {
            background: black url("source/images/cornell-box.png") center / cover;
        }
        </style>
    </head>
    
	<body>

        <section class="hero is-medium heroq is-info">
                <div class="hero-body">
                  <div class="container has-text-centered">
                    <h1 class="title is-1 is-capitalized">
                        INFINITY WORLD
                    </h1>
                  </div>
                </div>
              </section>
            
        <section style="margin-left:90px;margin-top:40px;margin-right:90px" class="content">
            <h1 class="title has-text-centered is-2" >WELCOME TO INFINITY WORLD</h1>


            <p class="content is-medium">
            Infinity World is a self evolving 3D world which is made out of 5 basic blocks. This world is infinite in size (has a theoretical limit ofcourse),
            but expands as more users play the game, since it combines computing power from all users.
            Each block behaves differently depending upon how "flared" up they are. A "flare" in this world, is essentially a signal that travels through blocks, 
            and causes each block to act accordingly.

            </p>
            <h1 class="title is-3">Blocks</h1>
            <p>
                In this universe, there are only 5 elements (which are shaped as cubes with 6 sides), in which all objects (or life) is made from.
                These 5 elements are:
            </p>
            <div class="content">
                <ol type="1" class="content">
                    <li>Infinity (I) block</li>
                    <li>Zero (Z) block</li>
                    <li>Magnetic (M) block</li>
                    <li>Fast (F) block</li>
                    <li>Slow (S) block</li>
                </ol>
            </div>
            <h2 class="title is-4">Infinity Block</h2>
            <p>
                The Infinity blocks, also known as the I blocks for short, come in 2 types. One of the I blocks known as the infinity plus (I <sup>+</sup>) block gives out flare in all directions (from all 6 sides). 
                The other block, called infinity minus block (I<sup>-</sup>) gives out flare, if no flare is flowing through it.
                I<sup>+</sup> blocks repel each other.
            </p>
            <h2 class="title is-4">Zero Block</h2>
            <p>
                The zero block, also known as the Z block, acts as an absorber for the flare. 
            </p>
            <h2 class="title is-4">Magnetic Block</h2>
            <p>
                The Magnetic block, also known as the the M block has 2 <i>states</i>:
                <ol type=1 class="content">
                    <li>Unflared State (M<sup>-</sup>)</li>
                    All M blocks start off in this state. M blocks in this state are <strong>strongly</strong> attracted to M blocks in the Flared state.
                    Unflared M blocks are also attracted to each other, but force is weaker compared to attraction between M<sup>-</sup> and M<sup>+</sup>
                    <li>Flared State (M<sup>+</sup>) </li>
                    For an M block to become flared, the amount of flare flowing through it must reach 1. If this happens, the M block is now in this flared state.
                    M<sup>+</sup> are also attracted to each other.
                </ol>
                Flare can flow through M blocks in either state, however flare loses 3/4 of its original flare.
            </p>
            <h2 class="title is-4">Fast Block</h2>
            <p>
                Fast Block, also known as an F(<sup>2</sup>) block, (Usually) doubles the amount of flare currently running through it, and outputs this flare on all the sides.
                Fast blocks are attracted to Unflared M blocks and S blocks
            </p>

            <h2 class="title is-4">Slow Block</h2>
            <p>
                Slow Block, also known as an S<sup>2</sup> block, (Usually) halves the amount of flare currently running through it, and outputs this flare on all its sides.
                Slow blocks are attracted to flared M blocks and F blocks
            </p>
            <p>

            If for any block, the amount of flare entering it is less than 0.01, the flare is totally lost.
            </p>

            <h1 class="title is-3">Fusion Laws</h1>

            <p>
                Blocks are not restricted in where they may move, they may rotate, and collide with other blocks however they see fit.
                If 2 blocks, collide with each other, with <strong><i>enough</i></strong> force, then they may fuse together to form a new block.
                <br>
                These are the fusion rules:
                <ol type=1 class="content">
                    <li>I &compfn; I = All 5 blocks are created (I<sup>+</sup>, Z, M<sup>-</sup>, F, S)</li>
                    <li>I &compfn; Z = I<sup>-</sup> </li>
                    <li>Z &compfn; (Any block) = Z </li>
                    <li>F<sup>2</sup> &compfn; F<sup>2</sup> = F<sup>4</sup> (except this F block quadruples any input that comes through it) </li>
                    <li>S<sup>2</sup> &compfn; S<sup>2</sup> = S<sup>4</sup> (except this S block takes a quarter of any input flare value that comes through it) </li>
                    <li>F &compfn; S = M<sup>-</sup></li>
                    <li>M<sup>-</sup> &compfn; M<sup>-</sup> = M<sup>-</sup> or M<sup>+</sup> depending upon the amount of internal flare stored in both the M blocks</li>
                    <li>M<sup>+</sup> &compfn; M<sup>+</sup> = M<sup>+</sup> 
                </ol>



            </p>

            <h1 class="title is-3">Origin</h1>
            <p>
                The world is created and blocks are introduced in the world by multiple singularities(or points) which send out blocks into the world at different speed and angles.
                After enough blocks this leads to the creation of planets (basically loads of M blocks joined together) and solar systems. 
            </p>


        </section>
  
  </body>



</html>