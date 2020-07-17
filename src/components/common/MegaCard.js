/* eslint-disable object-curly-newline */

import React from 'react';

import {Image, StyleSheet} from 'react-native';
import PropTypes from 'prop-types';


import {
    Card, Block, NavBar, Icon,Text
  } from 'galio-framework';


import GalioTheme from '../../screens/theme';

function MegaCard({
  avatar,
  borderless,
  caption,
  captionColor,
  card,
  children,
  
  image,
  imageBlockStyle,
  imageStyle,
  location,
  locationColor,
  shadow,
  style,
  styles,
  title,
  titleColor,
  theme,
  ...props
}) {
  


  function renderAvatar() {
    if (!avatar) {
      return null;
    }
    return <Image source={{uri: avatar}} style={styles.avatar} />;
  }

  function renderLocation() {
    if (!location) {
      return null;
    }
    if (typeof location !== 'string') {
      return location;
    }

    return (
      <Block row right>
        <Icon
          name="map-pin"
          family="feather"
         
          size={10}
        />
        <Text
          muted
          size={10 * 0.875}
         
          style={{marginLeft: 10 * 0.25}}>
          {location}
        </Text>
      </Block>
    );
  }

  function renderAuthor() {
    return (
      <Block flex row>
        
        <Block flex={1}>
          <Block >
            <Text 
            
            style={{
                fontSize: 20,
                justifyContent: 'center',
                alignItems: 'center',
                fontWeight: 'bold',
                textAlign: 'center',
                
              }}
            
            size={10 * 0.875} color={titleColor}>
              {title}
            </Text>
          </Block>
          <Block row space="between">
            <Block row right>
              <Text  style={{
              fontSize: 20,
              justifyContent: 'center',
              alignItems: 'center',
              fontWeight: 'bold',
              textAlign: 'center',
              marginLeft:10,
            }}
                p
                muted
                size={10 * 0.875}
                color={captionColor}>
                {caption}
              </Text>
            </Block>
            {renderLocation()}
          </Block>
        </Block>
      </Block>
    );
  }

  const styleCard = [borderless && {borderWidth: 0}, style];

  return (
    <Block {...props} card={card} shadow={shadow} style={styleCard}>
     
      {renderAuthor()}
      {children}
    </Block>
  );
}

Card.defaultProps = {
  card: true,
  shadow: true,
  borderless: false,
  styles: {},  
  title: '',
  titleColor: '',
  caption: '',
  captionColor: '',
  
  avatar: '',
};

Card.propTypes = {
  card: PropTypes.bool,
  shadow: PropTypes.bool,
  borderless: PropTypes.bool,
  styles: PropTypes.any,
  theme: PropTypes.any,
  title: PropTypes.string,
  titleColor: PropTypes.string,
  caption: PropTypes.string,
  captionColor: PropTypes.string,
  avatar: PropTypes.string,
  
};


const styles = {
    card: {
      borderWidth: 0,
     
     
     
    },
    
    avatar: {
     
    },
    title: {
      justifyContent: 'center',
    },
    imageBlock: {
      borderWidth: 0,
      overflow: 'hidden',
    },
    image: {
     
    },
    round: {
      borderRadius: 2,
    },
    rounded: {
      borderRadius: 2,
    },
};

  export { MegaCard };
